<?php

namespace GameBundle\Controller;

use GameBundle\Entity\Soldiers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Soldier controller.
 *
 */
class SoldiersController extends Controller
{
    /**
     * Lists all soldier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $soldiers = $em->getRepository('GameBundle:Soldiers')->findAll();

        return $this->render('soldiers/index.html.twig', array(
            'soldiers' => $soldiers,
        ));
    }

    /**
     * Creates a new soldier entity.
     *
     */
    public function newAction(Request $request)
    {
        $soldier = new Soldier();
        $form = $this->createForm('GameBundle\Form\SoldiersType', $soldier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($soldier);
            $em->flush($soldier);

            return $this->redirectToRoute('soldiers_show', array('id' => $soldier->getId()));
        }

        return $this->render('soldiers/new.html.twig', array(
            'soldier' => $soldier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a soldier entity.
     *
     */
    public function showAction(Soldiers $soldier)
    {
        $deleteForm = $this->createDeleteForm($soldier);

        return $this->render('soldiers/show.html.twig', array(
            'soldier' => $soldier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing soldier entity.
     *
     */
    public function editAction(Request $request, Soldiers $soldier)
    {
        $deleteForm = $this->createDeleteForm($soldier);
        $editForm = $this->createForm('GameBundle\Form\SoldiersType', $soldier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('soldiers_edit', array('id' => $soldier->getId()));
        }

        return $this->render('soldiers/edit.html.twig', array(
            'soldier' => $soldier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a soldier entity.
     *
     */
    public function deleteAction(Request $request, Soldiers $soldier)
    {
        $form = $this->createDeleteForm($soldier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($soldier);
            $em->flush($soldier);
        }

        return $this->redirectToRoute('soldiers_index');
    }

    /**
     * Creates a form to delete a soldier entity.
     *
     * @param Soldiers $soldier The soldier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Soldiers $soldier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('soldiers_delete', array('id' => $soldier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
