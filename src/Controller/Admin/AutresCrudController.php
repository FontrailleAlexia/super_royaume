<?php

namespace App\Controller\Admin;

use App\Entity\Autres;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AutresCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Autres::class;
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
