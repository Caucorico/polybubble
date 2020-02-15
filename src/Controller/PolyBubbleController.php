<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PolyBubbleController
 * @package App\Controller
 *
 * @Route("/", name="poly_bubble_")
 */
class PolyBubbleController extends AbstractController
{
    /**
     * Entry of the index of the Webpage.
     *
     * @Route("/", name="index", methods={"GET"})
     *
     * @return Response
     */
    public function index()
    {
        return $this->render('polybubble/page/index.html.twig');
    }

    /**
     * Page that displays the sponsors.
     *
     * @Route("/sponsors", name="sponsors", methods={"GET"})
     *
     * @return Response
     */
    public function sponsorsAction(): Response
    {
        return $this->render('polybubble/page/sponsors.html.twig');
    }
}