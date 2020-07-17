<?php
  namespace App\Controller;

  use App\Entity\TfdFilaAtendimento;
  use Doctrine\ORM\EntityManagerInterface;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



  class ExemploController extends AbstractController{

    /**
    * @return Response
    * @Route("", name="index")
    */

    public function index(){

      return $this->render('index/index.html.twig');
    }

  }


 ?>
