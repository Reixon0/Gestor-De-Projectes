<?php

namespace GestorProjectes\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \GestorProjectes\BackendBundle\Form\UsuarisType;
use \GestorProjectes\BackendBundle\Entity\Usuaris;
use \GestorProjectes\BackendBundle\Form\SubtascaType;
use \GestorProjectes\BackendBundle\Entity\Subtasca;
use \GestorProjectes\BackendBundle\Entity\Tasca;
use \GestorProjectes\BackendBundle\Form\TascaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class CrudController extends Controller {

    public function buscaTasquesAction($id) {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        
        $session = new Session();
        $em = $this->getDoctrine()->getManager();
        $tascas_repo = $em->getRepository("GestorProjectesBackendBundle:Tasca");
        $subtasca_repo = $em->getRepository("GestorProjectesBackendBundle:Subtasca");
        $user_repo = $em->getRepository("GestorProjectesBackendBundle:Usuaris");
        
        $auth_checker = $this->get('security.authorization_checker');
        $token = $this->get('security.token_storage')->getToken();
        $user = $token->getUser();
        $userId = $user->getId();
        
        $tasques = $tascas_repo->findBy(['responsable' => $userId]);

        if ($id == 0) {
            $t = $tascas_repo->findOneBy(['responsable' => $userId]);
            $id = $t->getId();
        }
        
        $tasca = $tascas_repo->findOneBy(['id' => $id]);
        $subtasques = $subtasca_repo->findBy(['idTasca' => $id]);

        return $this->render('GestorProjectesBackendBundle:Default:home.html.twig', array('tasques' => $tasques, 'tasca' => $tasca, 'subtasca' => $subtasques));
    }
    
}
