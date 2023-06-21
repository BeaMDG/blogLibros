<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Entity\Comentarios;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    public function index(PaginatorInterface $paginator, Request $request, ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser(); // Obtengo al usuario actualmente logueado

        if ($user) {
            $em = $doctrine->getManager();
            $query = $em->getRepository(Posts::class)->BuscarTodosLosPosts();
            $comentarios = $em->getRepository(Comentarios::class)->findBy(['user' => $user]); // Consulto los comentarios del usuario actualmente logueado
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1), /* page number */
                5 /* limit per page */
            );

            return $this->render('dashboard/index.html.twig', [
                'pagination' => $pagination,
                'comentarios' => $comentarios
            ]);
        } else {
            return $this->redirectToRoute('app_login');
        }
    }
}
