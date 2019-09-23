<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;



class AuthorsController extends Controller
{
    /**
     * @Route("/author/new", name="app_author_new")
     */
    public function newAction(Request $request)
    {
        $author = new Author();
        $form = $this->createFormBuilder($author)
            ->add('name', TextType::class)
            ->add('birthday',TextType::class)
            ->add('hometown',TextType::class)
            ->add('save',SubmitType::class, array('label'=>'Done'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $book = $form->getData();
            $doct = $this->getDoctrine()->getManager();
            $doct->persist($author);
            $doct->flush();
            //return $this->redirectToRoute('app_book_display');
        }
        else {
            return $this->render('Author/new.html.twig', array('form' => $form->createView()));
        }
    }
}