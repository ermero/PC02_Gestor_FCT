<?php

namespace FCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmpresaController extends Controller
{
    public function allAction()
    {
    	//OBTENGO EL REPOSITORIO DE LA ENTITY EMPRESA
    	$repository=$this->getDoctrine()->getRepository('FCTBundle:Empresa');

    	//RECUPERAMOS TODOS LOS REGISTROS DE LA TABLA EMPRESA
    	$empresas=$repository->findAll();

        return $this->render('FCTBundle:Empresa:all.html.twig', array("empresas"=>$empresas));
    }
}
