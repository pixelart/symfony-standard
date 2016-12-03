<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $translator = $this->get('translator');

        $translator->setLocale('en');
        $english = $translator->trans('Symfony is great');

        $translator->setLocale('fr');
        $french = $translator->trans('Symfony is great');

        return $this->render('confirm/20338.html.twig', [
            'english' => $english,
            'french' => $french
        ]);
    }
}
