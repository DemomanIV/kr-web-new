<?php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Entity\Bidd;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Bidd controller.
 *
 */
class BiddController extends Controller
{
    /**
     * Lists all Bidd entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bidds = $em->getRepository('BloggerBlogBundle:Bidd')->findAll();

        return $this->render('@BloggerBlog/Bidd/index.html.twig', array(
            'bidds' => $bidds,
        ));
    }

    /**
     * Creates a new Bidd entity.
     *
     */
    public function newAction(Request $request){
        $message = "";
        $bidd = new Bidd();
        $form = $this->createForm('Blogger\BlogBundle\Form\BiddType', $bidd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bidd);
            $em->flush();

            $message = "Заяявка добавлена и находится на рассмотрении у приёмной комиссии.";
//            return $this->redirectToRoute('blogger_blog_bidd_show', array('id' => $bidd->getId()));
        }

        return $this->render('@BloggerBlog/Bidd/new.html.twig', array(
            'bidd' => $bidd,
            'form' => $form->createView(),
            'message' => $message
        ));
    }

    /**
     * Finds and displays a Bidd entity.
     *
     */
    public function showAction(Bidd $bidd)
    {
        $deleteForm = $this->createDeleteForm($bidd);

        return $this->render('@BloggerBlog/Bidd/show.html.twig', array(
            'bidd' => $bidd,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bidd entity.
     *
     */
    public function editAction(Request $request, Bidd $bidd)
    {
        $deleteForm = $this->createDeleteForm($bidd);
        $editForm = $this->createForm('Blogger\BlogBundle\Form\BiddType', $bidd);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
//            $bidd->setCheck(!false);
//            $this->getDoctrine()->getManager()->persist($bidd);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('blogger_blog_bidd_edit', array('id' => $bidd->getId()));
        }

        return $this->render('@BloggerBlog/Bidd/edit.html.twig', array(
            'bidd' => $bidd,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Bidd entity.
     *
     */
    public function deleteAction(Request $request, Bidd $bidd)
    {
        $form = $this->createDeleteForm($bidd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bidd);
            $em->flush();
        }

        return $this->redirectToRoute('blogger_blog_bidd_index');
    }

    /**
     * Creates a form to delete a Bidd entity.
     *
     * @param Bidd $bidd The Bidd entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bidd $bidd)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('blogger_blog_bidd_delete', array('id' => $bidd->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
