<?php

namespace Console\App\Commands;

use Console\App\RulesHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserManagerCommand extends Command
{
    protected function configure()
    {
        $this->setName('user:manager')
            ->setDescription('Show manager work');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $rules = RulesHelper::getRule('manager');
        $output->writeln($rules);
        return 0;
    }
}