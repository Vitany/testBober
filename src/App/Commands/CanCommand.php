<?php

namespace Console\App\Commands;

use Console\App\User;
use Console\App\WorksHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CanCommand extends Command
{
    private $userWork;

    /**
     * CanCommand constructor.
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

    protected function configure()
    {
        $this->setDefinition(
            new InputDefinition([
                new InputArgument('work', InputArgument::REQUIRED),
            ])
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $work = $input->getArgument('work');
        $user = new User();
        $user->work = $this->userWork;
        $works = WorksHelper::canWorkThis($user, $work);
        $output->writeln($works ? 'true' : 'false');

        return 0;
    }
}