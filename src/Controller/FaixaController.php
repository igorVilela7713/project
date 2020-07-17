<?php

namespace App\Controller;

use App\Entity\TfdFilaAtendimento;
use App\Form\PostFaixaType;
use App\Form\PostFilaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FaixaController extends AbstractController
{

    /**
     * @Route("faixac", name="faixac")
     */
    public function createFaixa(){
        $posts = $this->getDoctrine()->getRepository('App:TfdFilaAtendimentoFaixaEtaria')->findAll();

        return $this->render('filafaixa/index.html.twig', [
            'posts' => $posts
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("faixad/{id}", name="faixad")
     */


    public function deleteActionFaixa($id)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('App:TfdFilaAtendimentoFaixaEtaria')->find($id);

        if (!$post) {
            return $this->redirectToRoute('faixac');
        }

        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('faixac');
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("faixam/{id}", name="faixam")
     */

    public function updateActionFaixa($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $fila = $em->getRepository('App:TfdFilaAtendimentoFaixaEtaria')->find($id);

        if (!$fila) {
            throw $this->createNotFoundException(
                'Fila nao encontrada para o Id '.$id
            );
        }

        $form = $this->createForm(PostFaixaType::class,$fila);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $fila = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fila);
            $entityManager->flush();

            return $this->redirectToRoute('faixac');

        }

        return $this->render('post/postFaixa.html.twig',
            [
                'formFaixa' => $form->createView()
            ]);


        return $this->redirectToRoute('faixac');
    }



}