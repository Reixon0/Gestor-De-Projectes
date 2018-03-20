<?php

namespace GestorProjectes\BackendBundle\Controller;

use GestorProjectes\BackendBundle\Entity\Tasca;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Tasca controller.
 *
 */
class TascaController extends Controller
{
    /**
     * Lists all tasca entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tascas = $em->getRepository('GestorProjectesBackendBundle:Tasca')->findAll();

        return $this->render('GestorProjectesBackendBundle:tasca:index.html.twig', array(
            'tascas' => $tascas,
        ));
    }

    /**
     * Creates a new tasca entity.
     *
     */
    public function newAction(Request $request)
    {
        $tasca = new Tasca();
        $form = $this->createForm('GestorProjectes\BackendBundle\Form\TascaType', $tasca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tasca);
            $em->flush();

            return $this->redirectToRoute('tasca_show', array('id' => $tasca->getId()));
        }

        return $this->render('GestorProjectesBackendBundle:tasca:new.html.twig', array(
            'tasca' => $tasca,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tasca entity.
     *
     */
    public function showAction(Tasca $tasca)
    {
        $deleteForm = $this->createDeleteForm($tasca);

        return $this->render('GestorProjectesBackendBundle:tasca:show.html.twig', array(
            'tasca' => $tasca,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tasca entity.
     *
     */
    public function editAction(Request $request, Tasca $tasca)
    {
        $deleteForm = $this->createDeleteForm($tasca);
        $editForm = $this->createForm('GestorProjectes\BackendBundle\Form\TascaType', $tasca);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tasca_edit', array('id' => $tasca->getId()));
        }

        return $this->render('GestorProjectesBackendBundle:tasca:edit.html.twig', array(
            'tasca' => $tasca,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tasca entity.
     *
     */
    public function deleteAction(Request $request, Tasca $tasca)
    {
        $form = $this->createDeleteForm($tasca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tasca);
            $em->flush();
        }

        return $this->redirectToRoute('tasca_index');
    }

    /**
     * Creates a form to delete a tasca entity.
     *
     * @param Tasca $tasca The tasca entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tasca $tasca)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tasca_delete', array('id' => $tasca->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
