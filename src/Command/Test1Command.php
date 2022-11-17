<?php

namespace App\Command;

use App\Service\MultiplesService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:test1')]
class Test1Command extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('number', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $values = (int) $input->getArgument('number');

        $result = MultiplesService::calculate($values);

        $output->writeln($result);

        return Command::SUCCESS;
    }
}