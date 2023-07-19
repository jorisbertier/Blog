<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        if($this->isGranted('ROLE_ADMIN')){
            return $this->render('admin/index.html.twig', [
                'controller_name' => 'AdminController',
            ]); 
        }
        return $this->redirectToRoute('app_home');
    }
}