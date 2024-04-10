<?php

/**
 * Example command using the Symfony Console component.
 *
 * @link http://symfony.com/doc/current/components/console
 */

namespace SteveGrunwell\PhpCliExamples\SymfonyConsole;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'hello-there')]
class HelloCommand extends Command
{
    /**
     * Define what the command should be called and what arguments it should accept.
     */
    protected function configure()
    {
        $this->setDescription('Greet a user by name.')
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
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(sprintf(
            '<comment>Symfony says "hello", %s!</comment>',
            $input->getArgument('name')
        ));

        return Command::SUCCESS;
    }
}
