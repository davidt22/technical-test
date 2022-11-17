<?php

namespace App\Command;

use App\Service\LongConsecutiveSequenceService;
use App\Service\MultiplesService;
use App\Service\TopFrequentElementsService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:test3')]
class Test3Command extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('data', InputArgument::REQUIRED, 'Separated values with comma');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $data = $input->getArgument('data');
        $data = explode(',', $data);

        $result = LongConsecutiveSequenceService::execute($data);

        $output->writeln($result);

        return Command::SUCCESS;
    }
}