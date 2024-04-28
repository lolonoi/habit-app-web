<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HabitController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $habitList = []; // Récupérez la liste des habitudes depuis la base de données ou un autre système de stockage

        $percentage = 0; // Calculer le pourcentage d'habitudes accomplies

        return $this->render('Home/index.html.twig', [
            'habitList' => $habitList,
            'percentage' => $percentage,
        ]);
    }

    #[Route('/create', name: 'create_habit')]
    public function createHabit(): Response
    {
        return $this->render('create_habit.html.twig');
    }

    #[Route('/handle-create', name: 'handle_create_habit', methods: ['POST'])]
    public function handleCreateHabit(Request $request): Response
    {
        // Récupérer les données du formulaire
        $title = $request->request->get('title');

        // Enregistrer la nouvelle habitude dans la base de données ou un autre système de stockage

        // Rediriger l'utilisateur vers la page d'accueil
        return $this->redirectToRoute('app_home');
    }
}
