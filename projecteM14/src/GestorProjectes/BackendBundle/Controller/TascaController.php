<?php

namespace GestorProjectes\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \GestorProjectes\BackendBundle\Entity\Tasca;
use \GestorProjectes\BackendBundle\Form\TascaType;
use Symfony\Component\HttpFoundation\Request;

class TascaController extends Controller {

    public function indexAction(Request $request) {
        $titol = "titol del formulari";
        $tasca = new tasca();
        $form = $this->createForm(TascaType::class, $tasca);


        $form->handleRequest($request);
        if ($form->isValid()) {
            $status = "Formulari vàlid";
//enviem les dades a la vista per visualitzar-les
            $data = array(
                'nom' => $form->get('nom')->getData(),
                'descripcio' => $form->get('descripcio')->getData(),
                'tempsMaxim' => $form->get('tempsMaxim')->getData(),
                'tempsRestant' => $form->get('tempsRestant')->getData(),
                'responsable' => $form->get('responsable')->getData(),
                'estat' => $form->get('estat')->getData(),
            );
        } else {
            $status = null;
            $data = null;
        }
        return $this->render('GestorProjectesBackendBundle:Default:tasca.html.twig', array('status' => $status, 'data' => $data,  'titol' => $titol, 'form' => $form->createView()));
    }

}
