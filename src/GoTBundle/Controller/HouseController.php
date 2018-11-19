<?php
// src/GoTBundle/Controller/HouseController.php

namespace GoTBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Comment;
use BlogBundle\Form\CommentType;

/**
 * House controller.
 */
class HouseController extends Controller
{
    public function newAction($post_id)
    {
        $post = $this->getPost($post_id);

        $comment = new Comment();
        $comment->setPost($post);

        $form   = $this->createForm(CommentType::class, $comment);

        return $this->render('BlogBundle:Comment:form.html.twig', array('comment' => $comment,'form'   => $form->createView()));
    }

    public function createAction(Request $request, $post_id)
    {
        $post = $this->getPost($post_id);

        $comment  = new Comment();
        $comment->setPost($post);

        $form = $this->createForm(CommentType::class, $comment );
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            // TODO: Persist the comment entity
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('blogger_blog_show', array('id' => $comment->getPost()->getId())) . '#comment-' . $comment->getId());
        }

        return $this->render('BlogBundle:Comment:create.html.twig', array('comment' => $comment, 'form' => $form->createView()));
    }

    protected function getPersonaje($post_id)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('BlogBundle:Post')->find($post_id);

        if (!$post) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $post;
    }
}
?>