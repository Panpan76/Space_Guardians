<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateGalaxyCommand extends Command
{
    protected function configure()
    {
        $this->setName('galaxy:create')
            ->setDescription('Create a new galaxy.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Galaxy Creator',
            '==============',
            '',
        ]);
    }
}
