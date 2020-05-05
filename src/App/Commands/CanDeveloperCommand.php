<?php

namespace Console\App\Commands;

use Console\App\RulesHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CanDeveloperCommand extends Command
{
    protected function configure()
    {
        $this->setName('can:developer')
            ->setDescription('Can a developer do that work?')
            ->addArgument('work', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $work = $input->getArgument('work');
        $rules = RulesHelper::canRule('developer', $work);

        $output->writeln($rules ? 'true' : 'false');
        return 0;
    }
}