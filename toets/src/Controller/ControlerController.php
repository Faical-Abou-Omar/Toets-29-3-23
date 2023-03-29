<?php
namespace App\Controller;

use App\Entity\Genre;
use App\Entity\Product;
use App\Repository\GenreRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControlerController extends AbstractController
{
    #[Route('/', name: 'app_controler')]
    public function HomeControler(): Response
    {
        return $this->render('/index.html.twig', [
            'controller_name' => 'ControlerController',
        ]);
    }

    #[Route('/add-genre', name: 'genre_controler')]
    public function GenreControler(): Response
    {
        return $this->render('/add-genre.html.twig', [
            'controller_name' => 'ControlerController',
        ]);
    }


    #[Route('/genre/{id}', name: 'app_genre')]
    public  function showGenre( genre $genre ,GenreRepository $genreRepository  )
    {
        $genre = $genreRepository->findBy(['name'=>$genre]);

        return $this->render('index.html.twig',[
            'id'=>$genre]);
    }
}








