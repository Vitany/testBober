<?php

namespace Console\App\Commands;

use Console\App\User;
use Console\App\WorksHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CanManagerCommand extends Command
{
    protected function configure()
    {
        $this->setName('can:manager')
            ->setDescription('Can a manager do that work?')
            ->addArgument('work', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $work = $input->getArgument('work');

        $user = new User();
        $user->work = 'manager';
        $works = WorksHelper::canWorkThis($user, $work);
        $output->writeln($works ? 'true' : 'false');

        return 0;
    }
}