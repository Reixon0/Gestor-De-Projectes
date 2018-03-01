<?php

namespace GestorProjectes\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \GestorProjectes\BackendBundle\Form\UsuarisType;
use \GestorProjectes\BackendBundle\Entity\Usuaris;
use Symfony\Component\HttpFoundation\Request;

class FormulariController extends Controller {

    public function loginAction(Request $request) {

        $titol = "titol del formulari";
        $usuari = new Usuaris();
        $form = $this->createForm(UsuarisType::class, $usuari);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $username = $form->get('username')->getData();
            $password = md5($form->get('password')->getData());
            $em = $this->getDoctrine()->getManager();
            $usuaris_repo = $em->getRepository("GestorProjectesBackendBundle:Usuaris");
            //$usuari = $usuaris_repo->find($id);
            $usuari = $usuaris_repo->findOneBy([
                        'username' => $username,
                        'password' => $password,
            ]);
            if ($usuari != null) {
                $status = "Usuari trobat";
                //Crear una sesion o algo para la permanencia del usuario logeado.
                return $this->render('GestorProjectesBackendBundle:Default:home.html.twig', array('username' => $username));
            } else {
                $status = "Usuari no trobat";
                return $this->render('GestorProjectesBackendBundle:Default:login.html.twig', array('titol' => $titol, 'form' => $form->createView()));
            }
        }

        return $this->render('GestorProjectesBackendBundle:Default:login.html.twig', array('titol' => $titol, 'form' => $form->createView()));
    }
    
    

}
