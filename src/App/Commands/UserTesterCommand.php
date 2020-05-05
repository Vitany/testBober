<?php

namespace Console\App\Commands;

use Console\App\User;
use Console\App\WorksHelper;
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
        $user = new User();
        $user->work = 'tester';
        $works = WorksHelper::getWorks($user);
        $output->writeln($works);

        return 0;
    }
}