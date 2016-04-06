<?php
/**
 * Example command using the Symfony Console component.
 *
 * @link http://symfony.com/doc/current/components/console
 */

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SymfonyExample extends Command
{

	/**
	 * Define what the command should be called and what arguments it should accept.
	 */
	protected function configure()
	{
		$this
			->setName('symfony-example')
			->setDescription('Greet a user by name.')
			->addArgument(
				'name',
				InputArgument::REQUIRED,
				'The name of the user'
			);
	}

	/**
	 * Execute the command.
	 *
	 * @param InputInterface  $input  The input interface.
	 * @param OutputInterface $output The output interface.
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln(sprintf(
			'<comment>Symfony says "hello", %s!</comment>',
			$input->getArgument('name')
		));
	}
}
