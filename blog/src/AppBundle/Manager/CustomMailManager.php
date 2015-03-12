<?php
namespace AppBundle\Manager;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Gender;
use AppBundle\Entity\User;
use Swift_Attachment;
use Swift_Mailer;
use Twig_Environment;


class CustomMailManager
{
    protected $em;
    protected $twig;
    protected $mailer;

    function __construct(EntityManager $em, Twig_Environment $twig, Swift_Mailer $mailer)
    {
        $this->em = $em;
        $this->twig = $twig;
        $this->mailer = $mailer;

    }

    protected function sendMail($user, $attachmentPath = false)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Happy Birthday!')
            ->setFrom('denis.pelyukhow@gmail.com')
            ->setTo($user['email'])
            ->setBody($this->twig->render(
                'AppBundle:emails:happybithday.html.twig',
                array('name' => $user['name'],
                    'gender' => $user['gender'],
                    'man' => Gender::GENDER_MAN)
            ), 'text/html');
        if($attachmentPath){
            $message->attach(Swift_Attachment::fromPath($attachmentPath));
        }

        if ($this->mailer->send($message)) {
            return true;
        }
        return false;
    }

    public function happyBirthdayMail()
    {
        $emailsSend = array();

        $users = $this->em->getRepository('AppBundle:Users')->getBirthdayUsers();

        foreach ($users as $user) {
            //get attachement picture
            if ($user['gender'] == Gender::GENDER_MAN) {
                $attachmentPath = 'http://small-games.info/avko/2/112073_24518.gif';
            } else {
                $attachmentPath = 'http://zastavki-oboi.ru/avatar/thumbs/mini_pingvin_linuks-468.jpg';
            }
            //send message
            if ($this->sendMail($user, $attachmentPath)) {
                $emailsSend[] = $user['email'];
            }
        }

        $text = 'We congratulated on his birthday next users: ' . implode(", ", $emailsSend);

        return $text;
    }
}