<?php

namespace App\Controller\Admin;

use App\Entity\Artisanat;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ArtisanatCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artisanat::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
