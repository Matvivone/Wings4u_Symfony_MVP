<?php

namespace App\Controller;

use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{

    /**
     * @Route("/home", name="app_home_blank")
     * @return Response
     */
    public function default()
    {
        return $this->render("menu.html.twig");
    }


    /**
     * @Route("/home/{pageName}", name="app_home_content")
     */

    public function show(string $pageName): Response
    {

        $repository = $this->getDoctrine()->getRepository(Project::class);
        $projects = $repository->findAll();


        return $this->render(
            sprintf(
                "%s.html.twig",
                $pageName
            ),['projects' => $projects]
        );
    }


    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}