<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this->setName('say_hello')
          ->setDescription('')
          ->addArgument('string');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Привет ' . $input->getArgument('string'));
    }
}