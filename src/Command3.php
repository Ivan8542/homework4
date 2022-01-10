<?php

namespace App;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;


class Command3 extends Command
{
    protected function configure()
    {
        $this
            ->setName('quest')
            ->setDescription('say_quest');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $question = new Question('Ведите имя   ', 'пусто');
        $name = $helper->ask($input, $output, $question);

        $question1 = new Question('Ваш возраст   ', 'пусто');
        $age = $helper->ask($input, $output, $question1);

        $question = new ChoiceQuestion(
            'Ваш пол (м)',
            // choices can also be PHP objects that implement __toString() method
            ['м', 'ж'],
            0
        );
        $question->setErrorMessage('Ваш пол не правильный');
        $floor = $helper->ask($input, $output, $question);
        
        $output->writeln('Здравствуйте   ' . $name . ' Ваш возраст: ' . $age . ' Ваш пол: ' . $floor);

    }
}

