<?php

namespace Console\App\Commands;

use Console\App\User;
use Console\App\WorksHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserDeveloperCommand extends Command
{
    protected function configure()
    {
        $this->setName('user:developer')
            ->setDescription('Show developer work');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = new User();
        $user->work = 'developer';
        $works = WorksHelper::getWorks($user);
        $output->writeln($works);

        return 0;
    }
}