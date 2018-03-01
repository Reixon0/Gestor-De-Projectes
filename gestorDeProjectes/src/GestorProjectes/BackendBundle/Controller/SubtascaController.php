<?php

namespace GestorProjectes\BackendBundle\Controller;

use GestorProjectes\BackendBundle\Entity\Subtasca;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Subtasca controller.
 *
 */
class SubtascaController extends Controller
{
    /**
     * Lists all subtasca entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $subtascas = $em->getRepository('GestorProjectesBackendBundle:Subtasca')->findAll();

        return $this->render('GestorProjectesBackendBundle:subtasca:index.html.twig', array(
            'subtascas' => $subtascas,
        ));
    }

    /**
     * Creates a new subtasca entity.
     *
     */
    public function newAction(Request $request)
    {
        $subtasca = new Subtasca();
        $form = $this->createForm('GestorProjectes\BackendBundle\Form\SubtascaType', $subtasca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($subtasca);
            $em->flush();

            return $this->redirectToRoute('subtasca_show', array('id' => $subtasca->getId()));
        }

        return $this->render('GestorProjectesBackendBundle:subtasca:new.html.twig', array(
            'subtasca' => $subtasca,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a subtasca entity.
     *
     */
    public function showAction(Subtasca $subtasca)
    {
        $deleteForm = $this->createDeleteForm($subtasca);

        return $this->render('GestorProjectesBackendBundle:subtasca:show.html.twig', array(
            'subtasca' => $subtasca,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing subtasca entity.
     *
     */
    public function editAction(Request $request, Subtasca $subtasca)
    {
        $deleteForm = $this->createDeleteForm($subtasca);
        $editForm = $this->createForm('GestorProjectes\BackendBundle\Form\SubtascaType', $subtasca);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('subtasca_edit', array('id' => $subtasca->getId()));
        }

        return $this->render('GestorProjectesBackendBundle:subtasca:edit.html.twig', array(
            'subtasca' => $subtasca,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a subtasca entity.
     *
     */
    public function deleteAction(Request $request, Subtasca $subtasca)
    {
        $form = $this->createDeleteForm($subtasca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($subtasca);
            $em->flush();
        }

        return $this->redirectToRoute('subtasca_index');
    }

    /**
     * Creates a form to delete a subtasca entity.
     *
     * @param Subtasca $subtasca The subtasca entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Subtasca $subtasca)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subtasca_delete', array('id' => $subtasca->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
