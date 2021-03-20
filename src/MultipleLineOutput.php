<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;


class MultipleLineOutput extends Command
{
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this->setName('multiple_string')
          ->setDescription('')
          ->addArgument('string', InputArgument::REQUIRED)
          ->addArgument('number_of_repetitions', InputArgument::OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');
        $count = $input->getArgument('number_of_repetitions');

        if ($count) {
         for ($i = 0; $i < $count; $i++) {
          $output->writeln($string);
         }
        } else {
          $output->writeln($string);
        }
    }
}