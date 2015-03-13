<?php
// src/AppBundle/Command/HappyBirthdayCommand.php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HappyBirthdayCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('main:happyBirthday')
            ->setDescription('Happy birthday delivery for users');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $mail = $this->getApplication()->getKernel()->getContainer()->get('customMail');
        $text = $mail->happyBirthdayMail();
        $output->writeln($text);
    }
}