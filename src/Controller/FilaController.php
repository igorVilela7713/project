<?php

namespace App\Controller;

use App\Entity\TfdFilaAtendimento;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilaController extends AbstractController
{


    /**
     * @Route("filac", name="filac")
     */
    public function createFila()
    {
        $posts = $this->getDoctrine()->getRepository('App:TfdFilaAtendimento')->findAll();

        return $this->render('fila/index.html.twig', [
            'posts' => $posts
        ]);

    }

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
     * @Route("/filad", name="filad")
     */

    public function deleteActionFila()
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('App:TfdFilaAtendimento')->find(1);

        if (!$post) {
            return $this->redirectToRoute('filac');
        }

        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('filac');
    }

}
