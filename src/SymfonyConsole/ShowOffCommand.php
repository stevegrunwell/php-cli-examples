<?php

/**
 * Symfony Console command that demonstrates various outputs.
 *
 * @link http://symfony.com/doc/current/components/console
 */

namespace SteveGrunwell\PhpCliExamples\SymfonyConsole;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'show-off')]
class ShowOffCommand extends Command
{
    /**
     * Define what the command should be called and what arguments it should accept.
     */
    protected function configure()
    {
        $this->setDescription('Show off some of the nice output features');
    }

    /**
     * Execute the command.
     *
     * @param InputInterface  $input  The input interface.
     * @param OutputInterface $output The output interface.
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title("Let's show off a bit, shall we?");
        $io->text('This will show off some of the nice outputs available to us through Symfony Console.');

        $io->section('Colors');
        $io->info('This is an informational message');
        $io->comment('This is a comment');
        $io->warning('This is a warning');
        $io->error('This is an error');
        $io->success('This is a success message');

        $io->section('Formatting');
        $io->listing([
            'This is a list of items',
            'They get passed as an array',
            'Then formatted nicely',
        ]);
        $io->note('This is a note');
        $io->caution('This is a cautionary message');

        $io->text('Table');
        $io->table(
            ['Animal', 'Sound'],
            [
                ['dog', 'woof'],
                ['cat', 'meow'],
                ['bird', 'tweet'],
            ]
        );

        $io->text('Horizontal table');
        $io->horizontalTable(
            ['Animal', 'Sound'],
            [
                ['dog', 'woof'],
                ['cat', 'meow'],
                ['bird', 'tweet'],
            ]
        );

        $io->text('Definition list');
        $io->definitionList(
            ['dog' => 'woof'],
            ['cat' => 'meow'],
            ['bird' => 'tweet'],
        );

        $io->section('Progress bars');
        $io->progressStart(5);

        for ($i = 0; $i < 5; $i++) {
            sleep(1);
            $io->progressAdvance();
        }

        $io->progressFinish();
        $io->success('Our progress bar completed successfully!');

        $io->section('Input features');
        $name = $io->ask("What's your name?", 'anonymous');
        $secret = $io->askHidden("Okay, {$name}, what's a secret you have? (This won't show)");
        if ($secret && $io->confirm('Do you want to know a secret?')) {
            $io->text("Well, according to {$name}:");
            $io->newLine();
            $io->text("\t<fg=cyan;options=bold>{$secret}</>");
            $io->newLine();
            $io->text('Pretty wild, right?');
        }

        return Command::SUCCESS;
    }
}
