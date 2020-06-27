<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Doctrine\ORM\EntityManagerInterface;

class AccountController extends AccueilController
{
    /**
     * @Route("/connexion",name="connexion")
     */
    public function connexion()
    {
        return $this->render('Account/connexion.html.twig');
    }
    
    /**
     * @Route("/inscription",name="inscription")
     */
    public function inscription()
    {
        return $this->render('Account/inscription.html.twig');
    }
}