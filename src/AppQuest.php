<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;


class AppQuest extends Command
{
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this->setName('app:quest')
          ->setDescription('');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $helper = $this->getHelper('question');

      $question1 = new Question('Ваше имя?', 'AcmeDemoBundle');
      $question2 = new Question('Ваш возраст?', 'AcmeDemoBundle');
      $question3 = new ChoiceQuestion('Ваш пол (М)?', ['M', 'Ж'], 0);
      $question3->setErrorMessage('Вы ввели какую то фигню!');

      $bundleName = $helper->ask($input, $output, $question1);
      $bundleAge = $helper->ask($input, $output, $question2);
      $bundleGender = $helper->ask($input, $output, $question3);

      $output->writeln('Здравствуйте, ' . $bundleName . ' ваш возраст: ' . $bundleAge . ', ваш пол: ' . $bundleGender);

    }
}