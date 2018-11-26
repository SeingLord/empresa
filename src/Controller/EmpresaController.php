<?php

namespace App\Controller;


use App\Entity\Empresa;
use App\Form\EmpresaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 *  @Route("/empresas");
 * @package App\Controller
 */
class EmpresaController extends Controller
{
    /**
     * @Route("/")
     * @return Response
     */
    public function indexAction()
    {
        $empresas = $this->getDoctrine()->getRepository("App:Empresa")
        ->findAll();
        //var_dump($empresas);
        return $this->render('empresa/empresas.html.twig', ['empresa'=>$empresas]);
    }

    /**
     * @Route("/create")
     * @return Response
     *
     */

    public function createAction (Request $request){

        $form = $this->createForm(EmpresaType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $empresa = $form->getData();
            $doctrine = $this->getDoctrine()->getEntityManager();

            $doctrine->persist($empresa);
            $doctrine->flush();
            $this->addFlash("success", "Empresa cadastrada com sucesso");
            return $this->redirect('/empresas/');
             }
        return $this->render('/empresa/create.html.twig',['form'=>$form->CreateView()]);


    }

    /**
     * @Route("/edit/{id}")
     * @return Response
     */


    public function editAction (Empresa $empresa, Request $request){
        $form = $this->createForm(EmpresaType::class,$empresa);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $empresa =$form->getData();
            $doctrine = $this->getDoctrine()->getEntityManager();

            $doctrine->persist($empresa);
            $doctrine->flush();
            $this->addFlash("sucess", "Empresa cadastrada com sucesso");
            return $this->redirect("/empresas");
        }
        return $this->render('/empresa/create.html.twig',['form'=>$form->CreateView()]);
    }
    /**
     * @Route("/remove/{id}")
     * @return Response
     */
    public function removeAction (Empresa $empresa){
        $this->getDoctrine()->getEntityManager()->remove($empresa);
        $this->getDoctrine()->getEntityManager()->flush();

        $this->addFlash("warning","Post removido com sucesso");
        return $this->redirect("/empresas");
    }

}
