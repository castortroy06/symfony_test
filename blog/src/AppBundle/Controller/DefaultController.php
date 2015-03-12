<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Gender;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Attachment;

class DefaultController extends Controller
{
    /**
     * @Route("/default", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
