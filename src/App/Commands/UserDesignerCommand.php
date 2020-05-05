<?php
namespace Console\App\Commands;

use Console\App\RulesHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserDesignerCommand extends Command
{
    protected function configure()
    {
        $this->setName('user:designer')
            ->setDescription('Show designer work');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $rules = RulesHelper::getRule('designer');
        $output->writeln($rules);
        return 0;
    }
}