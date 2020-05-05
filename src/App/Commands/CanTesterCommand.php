<?php

namespace Console\App\Commands;

use Console\App\RulesHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CanTesterCommand extends Command
{
    protected function configure()
    {
        $this->setName('can:tester')
            ->setDescription('Can a tester do that work?')
            ->addArgument('work', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $work = $input->getArgument('work');
        $rules = RulesHelper::canRule('tester', $work);

        $output->writeln($rules ? 'true' : 'false');
        return 0;
    }
}