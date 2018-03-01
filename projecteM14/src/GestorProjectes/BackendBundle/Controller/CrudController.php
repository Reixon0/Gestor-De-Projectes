<?php

namespace GestorProjectes\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \GestorProjectes\BackendBundle\Form\UsuarisType;
use \GestorProjectes\BackendBundle\Entity\Usuaris;
use \GestorProjectes\BackendBundle\Form\SubtascaType;
use \GestorProjectes\BackendBundle\Entity\Subtasca;
use \GestorProjectes\BackendBundle\Entity\Tasca;
use Symfony\Component\HttpFoundation\Request;

class CrudController extends Controller {

    public function creaUsuariAction(Request $request) {

        $usuari = new Usuaris();
        $form = $this->createForm(UsuarisType::class, $usuari);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $usuari->setUsername($form->get('username')->getData());
            $usuari->setPassword(md5($form->get('password')->getData()));
            //fem el mateix per la resta d'atributs
            //cridem a l'entity manager
            $em = $this->getDoctrine()->getManager();
            //persistim les dades (les guardem dins doctrine)
            $em->persist($usuari);
            //executem el flush per guardar en la BDD
            $flush = $em->flush();
        }
        return $this->render('GestorProjectesBackendBundle:Default:registra.html.twig', array('form' => $form->createView()));
    }

    public function creaSubtascaAction(Request $request) {

        $subtasca = new Subtasca();
        $form = $this->createForm(SubtascaType::class, $subtasca);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $subtasca->setNom($form->get('nom')->getData());
            $subtasca->setDescripcio($form->get('descripcio')->getData());
            $subtasca->setParticipants($form->get('participants')->getData());
            $subtasca->setTempsMaxim($form->get('tempsMaxim')->getData());
            $subtasca->setTempsRestant($form->get('tempsRestant')->getData());
            $subtasca->setIdTasca($form->get('idTasca')->getData());
            $subtasca->setEstat($form->get('estat')->getData());

            //fem el mateix per la resta d'atributs
            //cridem a l'entity manager
            $em = $this->getDoctrine()->getManager();
            //persistim les dades (les guardem dins doctrine)
            $em->persist($subtasca);
            //executem el flush per guardar en la BDD
            $flush = $em->flush();
        }

        return $this->render('GestorProjectesBackendBundle:Default:tasca.html.twig', array('titol' => $titol, 'form' => $form->createView()));
    }

    public function buscaTasquesAction(Request $request) {
       // $tasca = new Tasca();
        $em = $this->getDoctrine()->getManager();
        $tascas_repo = $em->getRepository("GestorProjectesBackendBundle:Tasca");
        $tasques = $tascas_repo->findAll();
        return $this->render('GestorProjectesBackendBundle:Default:home.html.twig', array('tasques' => $tasques));
    }
    
    

}
