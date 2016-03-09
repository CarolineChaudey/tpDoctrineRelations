<?php

namespace cc\relationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use cc\relationsBundle\Entity\Ordinateur;
use cc\relationsBundle\Entity\Salarie;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ccrelationsBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function newSalarieAction(){

        $ordi = new Ordinateur;
        $ordi->setLibelleOrdi("tosh52compta");
        $ordi->setMarque("Toshiba");
        
        $salarie = new Salarie;
        $salarie->setFonctionSalarie("comptable");
        $salarie->setNomSalarie("Dupré");
        $salarie->setPrenomSalarie("Alain");
        $salarie->setOrdinateur($ordi);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($salarie);
        $em->flush();
        
        return new Response("OK");
    }
    
    public function getPcFromSalarieAction($nom){
        
        $repo = $this->getDoctrine()->getManager()->getRepository('ccrelationsBundle:Salarie');
        $salarie = $repo->findByName($nom);
        $nomOrdi = $salarie->getOrdinateur()->getLibelleOrdi();
        
        return new Response($nomOrdi);
    }
    
    public function getSalarieFromPcAction($nom){
        
        $repoO = $this->getDoctrine()->getManager()->getRepository('ccrelationsBundle:Ordinateur');
        $ordi = $repoO->findByLibelle($nom);
        $repoS = $this->getDoctrine()->getManager()->getRepository('ccrelationsBundle:Salarie');
        $salarie = $repoS->findByOrdi($ordi);
        
        return new Response($salarie->getNomSalarie());
    }
}
