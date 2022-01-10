<?php

namespace App;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class Command1 extends Command
{
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('say_hello')
            ->addArgument('helloToWhom', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helloToWhom = $input->getArgument('helloToWhom');
        $output->writeln("Привет: " . $helloToWhom);
    }
}
