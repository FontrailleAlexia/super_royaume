<?php

namespace App\Controller\Admin;

use App\Entity\Aventure;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AventureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Aventure::class;
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
