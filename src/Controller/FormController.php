<?php

namespace App\Controller;

use App\Entity\TfdFilaAtendimento;
use App\Entity\TfdFilaAtendimentoFaixaEtaria;
use App\Form\PostFaixaType;
use App\Form\PostFilaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController{

    /**
     * @Route("/faixa", name="faixa")
     */
    public function postFaixa(Request $request){



        // just setup a fresh $task object (remove the example data)
        $task = new TfdFilaAtendimentoFaixaEtaria();





        $form = $this->createForm(PostFaixaType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute('faixac');

        }

        return $this->render('post/postFaixa.html.twig',
            [
                'formFaixa' => $form->createView()
            ]);

    }

    /**
     * @Route("/fila", name="fila")
     */
    public function postFila(Request $request){

        // just setup a fresh $task object (remove the example data)
        $task = new TfdFilaAtendimento();
        $task->setNOME('Keyboard');
        $task->setCODIGOULTIMOUSUARIO("0");
        $task->setATIVO("1");


        $form = $this->createForm(PostFilaType::class,$task);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute('filac');

        }

        return $this->render('post/postFaixa.html.twig',
            [
                'formFaixa' => $form->createView()
            ]);

    }


}
