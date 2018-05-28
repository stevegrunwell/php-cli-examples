<?php
/**
 * Example command using WP-CLI.
 *
 * ## Usage
 *
 * On a WordPress site, either include this file in a plugin/theme or use the --include option
 * with WP-CLI:
 *
 *   $ wp --include path/to/WPCLIExample.php example-command latest-posts-by-user steve
 *
 * @link https://make.wordpress.org/cli/handbook/commands-cookbook/
 */

/**
 * Normally I'd prefer this setup be in the file that includes this class, but in the interest of
 * making this example script portable we'll do it here.
 */
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
	return;
}

/**
 * Example WP-CLI script.
 */
class Example_WP_CLI_Command extends WP_CLI_Command {

	/**
	 * Display the latest posts from a given user.
	 *
	 * ## OPTIONS
	 *
	 * <login>
	 * : The user login to collect stats for.
	 *
	 * ## EXAMPLES
	 *
	 * wp example-command latest-posts-by-user admin
	 *
	 * @subcommand latest-posts-by-user
	 */
	public function latest_posts_by_user( $args ) {
		$user = get_user_by( 'login', $args['0'] );

		if ( ! $user ) {
			return WP_CLI::error( 'The specified user login does not exist!' );
		}

		$posts = get_posts( [
            'author' => $user->ID,
        ] );

		return WP_CLI\Utils\format_items(
            'table',
            $posts,
            [ 'ID', 'post_title', 'post_date' ]
        );
	}
}

WP_CLI::add_command( 'example-command', 'Example_WP_CLI_Command' );
