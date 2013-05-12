<?php

namespace Billfold\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/** 
 * Controller dedicato al rendering esclusivamente delle pagine del sito
 */
class pagesController extends Controller
{
    /**
     * @Route("/home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
}
