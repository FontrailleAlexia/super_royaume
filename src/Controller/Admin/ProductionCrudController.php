<?php

namespace App\Controller\Admin;

use App\Entity\Production;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Production::class;
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
