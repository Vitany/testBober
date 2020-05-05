<?php

namespace Console\App\Commands;

use Console\App\RulesHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserTesterCommand extends Command
{
    protected function configure()
    {
        $this->setName('user:tester')
            ->setDescription('Show tester work');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $rules = RulesHelper::getRule('tester');
        $output->writeln($rules);
        return 0;
    }
}