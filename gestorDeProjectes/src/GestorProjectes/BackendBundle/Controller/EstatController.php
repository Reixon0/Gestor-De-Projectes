<?php

namespace GestorProjectes\BackendBundle\Controller;

use GestorProjectes\BackendBundle\Entity\Estat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Estat controller.
 *
 */
class EstatController extends Controller
{
    /**
     * Lists all estat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estats = $em->getRepository('GestorProjectesBackendBundle:Estat')->findAll();

        return $this->render('GestorProjectesBackendBundle:estat:index.html.twig', array(
            'estats' => $estats,
        ));
    }

    /**
     * Creates a new estat entity.
     *
     */
    public function newAction(Request $request)
    {
        $estat = new Estat();
        $form = $this->createForm('GestorProjectes\BackendBundle\Form\EstatType', $estat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estat);
            $em->flush();

            return $this->redirectToRoute('estat_show', array('id' => $estat->getId()));
        }

        return $this->render('GestorProjectesBackendBundle:estat:new.html.twig', array(
            'estat' => $estat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estat entity.
     *
     */
    public function showAction(Estat $estat)
    {
        $deleteForm = $this->createDeleteForm($estat);

        return $this->render('GestorProjectesBackendBundle:estat:show.html.twig', array(
            'estat' => $estat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estat entity.
     *
     */
    public function editAction(Request $request, Estat $estat)
    {
        $deleteForm = $this->createDeleteForm($estat);
        $editForm = $this->createForm('GestorProjectes\BackendBundle\Form\EstatType', $estat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estat_edit', array('id' => $estat->getId()));
        }

        return $this->render('GestorProjectesBackendBundle:estat:edit.html.twig', array(
            'estat' => $estat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estat entity.
     *
     */
    public function deleteAction(Request $request, Estat $estat)
    {
        $form = $this->createDeleteForm($estat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estat);
            $em->flush();
        }

        return $this->redirectToRoute('estat_index');
    }

    /**
     * Creates a form to delete a estat entity.
     *
     * @param Estat $estat The estat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Estat $estat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estat_delete', array('id' => $estat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
