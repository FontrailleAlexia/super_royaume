<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Artisanat;
use App\Entity\Autres;
use App\Entity\Aventure;
use App\Entity\Machine;
use App\Entity\Production;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        $animal = $this->entityManager->getRepository(Animal::class)->findAll();
        $artisanat = $this->entityManager->getRepository(Artisanat::class)->findAll();
        $autres = $this->entityManager->getRepository(Autres::class)->findAll();
        $aventure = $this->entityManager->getRepository(Aventure::class)->findAll();
        $machine = $this->entityManager->getRepository(Machine::class)->findAll();
        $production = $this->entityManager->getRepository(Production::class)->findAll();

        return $this->render('accueil/index.html.twig', [
            'animal' => $animal,
            'artisanat' => $artisanat,
            'autres' => $autres,
            'aventure' => $aventure,
            'machine' => $machine,
            'production' => $production,
        ]);
    }
}
