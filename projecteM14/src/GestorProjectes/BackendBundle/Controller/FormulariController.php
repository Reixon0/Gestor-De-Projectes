<?php

namespace GestorProjectes\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \GestorProjectes\BackendBundle\Form\UsuarisType;
use \GestorProjectes\BackendBundle\Entity\Usuaris;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class FormulariController extends Controller {

    public function loginAction(Request $request) {
        $session = new Session();

        if ($session->get('userId') != null) {
            return $this->redirectToRoute('gestor_projectes_backend_buscaTasques');
        }

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
                $session->set('userId', $usuari->getId());
                return $this->redirectToRoute('gestor_projectes_backend_buscaTasques');
            } else {
                return $this->render('GestorProjectesBackendBundle:Default:login.html.twig', array('titol' => $titol, 'form' => $form->createView()));
            }
        }
        return $this->render('GestorProjectesBackendBundle:Default:login.html.twig', array('titol' => $titol, 'form' => $form->createView()));
    }
   

}
