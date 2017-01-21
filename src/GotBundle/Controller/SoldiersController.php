<?php

namespace GotBundle\Controller;

use GotBundle\Entity\Soldiers;
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

        $soldiers = $em->getRepository('GotBundle:Soldiers')->findAll();

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
        $form = $this->createForm('GotBundle\Form\SoldiersType', $soldier);
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
