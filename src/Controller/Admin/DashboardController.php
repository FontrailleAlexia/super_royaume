<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use App\Entity\Artisanat;
use App\Entity\Autres;
use App\Entity\Aventure;
use App\Entity\Machine;
use App\Entity\Production;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Superroyaume');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Animal', 'fas fa-dog', Animal::class);
        yield MenuItem::linkToCrud('Artisanat', 'fas fa-cannabis', Artisanat::class);
        yield MenuItem::linkToCrud('Autres', 'fas fa-bomb', Autres::class);
        yield MenuItem::linkToCrud('Aventure', 'fas fa-cloud', Aventure::class);
        yield MenuItem::linkToCrud('Machine', 'fas fa-fax', Machine::class);
        yield MenuItem::linkToCrud('Production', 'fas fa-umbrella', Production::class);
    }
}
