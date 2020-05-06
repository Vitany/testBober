<?php

namespace Console\App\Commands;

use Console\App\User;
use Console\App\WorksHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserCommand extends Command
{
    private $userWork;

    /**
     * UserCommand constructor.
     * @param string $command
     * @param string $userWork
     */
    public function __construct(string $command, string $userWork)
    {
        $this->userWork = $userWork;
        $this->setName($command);
        $this->configure();

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = new User();
        $user->work = $this->userWork;
        $works = WorksHelper::getWorks($user);
        $output->writeln($works);

        return 0;
    }
}