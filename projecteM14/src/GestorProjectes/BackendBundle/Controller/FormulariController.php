<?php

namespace GestorProjectes\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \GestorProjectes\BackendBundle\Form\UsuarisType;
use \GestorProjectes\BackendBundle\Entity\Usuaris;
use Symfony\Component\HttpFoundation\Request;

class FormulariController extends Controller {

    public function createAction(Request $request) {

        $titol = "titol del formulari";
        $usuari = new Usuaris();
        $form = $this->createForm(UsuarisType::class, $usuari);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $username = $form->get('username')->getData();
            return $this->render('GestorProjectesBackendBundle:Default:home.html.twig', array('username' => $username));
           
           /* $usuari = $repository->findOneBy([
                'username' => $form->get('username')->getData(),
                'password' => md5($form->get('password')->getData())
            ]);

                         * $data = array(
              'username' => $form->get('username')->getData(),
              'password' => $form->get('password')->getData()
              );* */           
        } else {
            //$data = null;
            $username = null;
        }

        return $this->render('GestorProjectesBackendBundle:Default:login.html.twig', array('titol' => $titol, 'form' => $form->createView()));
    }

}
