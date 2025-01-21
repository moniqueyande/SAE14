<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoniqueController extends AbstractController
{
    // Route pour la page d'accueil
    #[Route('/', name: 'app_monique')]
    public function index(): Response
    {
        return $this->render('monique/index.html.twig', [
            'nom' => 'Monique Yande',
            'prenom' => 'Sene',
            'formation' => 'Réseaux et Télécommunication',
            'passions' => 'Technologies, Réseaux, et Programmation',
        ]);
    }

    // Route pour la page CV
    #[Route('/monique/cv', name: 'app_monique_cv')]
    public function cv(): Response
    {
        // Récupérer les données pour le CV
        return $this->render('monique/cv.html.twig', [
            'nom' => 'Monique Yande',
            'prenom' => 'Sene',
            'adresse' => '13 avenue de Paris, 42300, Roanne',
            'telephone' => '0758330165',
            'email' => 'yandesenemonique@gmail.com',
            'date_naissance' => '04/08/2004',
            'pays' => 'Sénégal',
            'profil' => 'Titulaire d\'un baccalauréat, je recherche un poste dans le secteur événementiel...',
            'experiences' => [
                [
                    'titre' => 'Logistique événementielle',
                    'lieu' => 'Sénégal',
                    'duree' => '08/2023 – Présent',
                    'details' => [
                        'Supervision de la logistique événementielle pour des séminaires et conférences.',
                        'Coordination des différentes équipes internes (vente, production, logistique).'
                    ]
                ],
                [
                    'titre' => 'Animatrice d\'événements et spectacles',
                    'lieu' => 'Sénégal',
                    'duree' => '08/2022 – 09/2023',
                    'details' => [
                        'Animation d\'ateliers et de spectacles à thème.',
                        'Encadrement de groupes d\'enfants et d\'adultes.'
                    ]
                ]
            ],
            'formations' => [
                [
                    'nom' => 'BUT Réseaux et Télécommunications (RT)',
                    'duree' => '09/2024 – En cours',
                    'etablissement' => 'Université Jean Monnet Saint-Étienne IUT Roanne'
                ],
                [
                    'nom' => 'Baccalauréat S2 Sciences Expérimentales',
                    'duree' => '10/2020 – 07/2023',
                    'etablissement' => 'Lycée Demba Diop – Sénégal'
                ]
            ]
        ]);
    }

    // Route pour la page E-portfolio
    #[Route('/monique/portfolio', name: 'app_monique_portfolio')]
    public function portfolio(): Response
    {
        // Exemple de projets pour l'portfolio
        return $this->render('monique/portfolio.html.twig', [
            'projets' => [
                ['titre' => 'Projet Réseau 1', 'description' => 'Configuration d\'un réseau local', 'lien' => '#'],
                ['titre' => 'Projet Réseau 2', 'description' => 'Sécurisation d\'un réseau d\'entreprise', 'lien' => '#']
            ]
        ]);
    }
}
