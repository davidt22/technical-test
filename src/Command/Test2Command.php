<?php

namespace App\Command;

use App\Service\MultiplesService;
use App\Service\TopFrequentElementsService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:test2')]
class Test2Command extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('data', InputArgument::REQUIRED, 'Separated values with comma')
            ->addArgument('value', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $data = $input->getArgument('data');
        $data = explode(',', $data);
        $value = (int) $input->getArgument('value');

        $result = TopFrequentElementsService::execute($data, $value);

        $output->writeln($result);

        return Command::SUCCESS;
    }
}