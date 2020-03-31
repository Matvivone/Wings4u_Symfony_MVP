<?php

namespace App\Controller;

use App\Entity\Project;
use App\Form\ProjectFormType;
use App\Repository\ProjectsRepository;
use App\Repository\UserRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ProjectController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */


    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Project::class);

        // look for *all* Product objects
        $projects = $repository->findAll();

        return $this->render('projects.html.twig', [
            'projects' => $projects
        ]);
    }


    /**
     * @Route("/project/edit/{id}", name="editProject")
     */

    public function edit(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $em, int $id)
    {

        $project = $em->getRepository(Project::class)->findOneBy(['id' => $id]);

        $form = $this->createForm(ProjectFormType::class,$project);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $title = $form->getData()->getTitle();
            $country = $form ->getData()->getCountry();
            $responsible = $form ->getData()->getResponsible();
            $content_status = $form ->getData()->getContentStatus();
            $video_status = $form ->getData()->getVideoStatus();

            $project -> setTitle($title);
            $project -> setCountry($country);
            $project -> setResponsible($responsible);
            $project -> setContentStatus($content_status);
            $project -> setVideoStatus($video_status);

            $em->persist($project);
            $em->flush();

            $this->addFlash('success', 'Project updated!');

            return $this->redirectToRoute('projects');
        }
        return $this->render('editProject.html.twig', [
            'projectForm' => $form->createView()
        ]);

    }

    /**
     * @Route("/project/new", name="project")
     */
    public function new(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(ProjectFormType::class);

        $form->handleRequest($request);
        $project = new Project();


        if ($form->isSubmitted() && $form->isValid()) {
            $title = $form ->getData()['Title'];
            $country = $form ->getData()['Country'];
            $responsible = $form ->getData()['Responsible'];
            $content_status = $form ->getData()['Content_status'];
            $video_status = $form ->getData()['Video_status'];

            $project -> setTitle($title);
            $project -> setCountry($country);
            $project -> setResponsible($responsible);
            $project -> setContentStatus($content_status);
            $project -> setVideoStatus($video_status);

            $em->persist($project);
            $em->flush();

            $this->addFlash('success', 'Project created!');

            return $this->redirectToRoute('projects');
        }
        return $this->render('newProject.html.twig', [
            'projectForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/project/delete/{id}", name="deleteProject")
     */
    public function delete(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $em,int $id)
    {
        $project = $em->getRepository(Project::class)->findOneBy(['id' => $id]);
        $em->remove($project);
        $em->flush();
        $this->addFlash('success', 'Project deleted!');

        return $this->redirectToRoute('projects');
    }




}
