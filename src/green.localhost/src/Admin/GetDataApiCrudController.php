<?php

namespace App\Admin;

use App\Entity\GetDataApi;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GetDataApiCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return GetDataApi::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name', 'Nom de l\'API'),
            TextField::new('entrypoint', 'Point d\'entrée de l\'API'),
            CollectionField::new('getDataDatasets', 'Datasets liés')->hideOnForm(),
        ];
    }
}
