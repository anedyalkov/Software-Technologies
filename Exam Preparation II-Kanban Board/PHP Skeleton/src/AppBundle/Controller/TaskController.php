<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
       // TODO: Implement me...
        $taskRepo = $this->getDoctrine()->getRepository(Task::class);
        $openTasks = $taskRepo->findBy(['status' => 'Open']);
        $inProgressTasks = $taskRepo->findBy(['status' => 'In Progress']);
        $finishedTasks = $taskRepo->findBy(['status' => 'Finished']);
        return $this->render('task/index.html.twig',
            ['openTasks' => $openTasks, 'inProgressTasks' => $inProgressTasks, 'finishedTasks' => $finishedTasks]);
    }

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        // TODO: Implement me...
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($task->getTitle() === null) {
                return $this->redirectToRoute('create');
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render('task/create.html.twig', array('form' => $form->createView()));

    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, Request $request)
    {
       // TODO: Implement me...
        $taskForEdit = $this->getDoctrine()->getRepository(Task::class)->find($id);
        if ($taskForEdit === null) {
            return $this->redirectToRoute('index');
        }
        $form = $this->createForm(TaskType::class, $taskForEdit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->merge($taskForEdit);
            $em->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render('task/edit.html.twig', ['task' => $taskForEdit, 'form' => $form->createView()]);
    }
}
