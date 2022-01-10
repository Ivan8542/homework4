<?php

namespace App;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;



class Command2 extends Command
{
    protected function configure()
    {
        $this
            ->setName('command2')
            ->setDescription('command2')
            ->addArgument('helloToWhom', InputArgument::REQUIRED)
            ->addArgument('times', null, InputArgument::OPTIONAL, 2);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helloToWhom = $input->getArgument('helloToWhom');
        $times = $input->getArgument('times');
        for ($i = 0; $i < $times; $i++) {
            $output->writeln("Привет: " . $helloToWhom);
        }
    }
}
