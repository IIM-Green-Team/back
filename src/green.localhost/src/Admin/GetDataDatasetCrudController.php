<?php

namespace App\Admin;

use App\Entity\GetDataApi;
use App\Entity\GetDataDataset;
use App\Form\GetDataApiFormType;
use App\Repository\GetDataApiRepository;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GetDataDatasetCrudController extends AbstractCrudController
{
    private GetDataApiRepository $dataApiRepository;

    /**
     * @param GetDataApiRepository $dataApiRepository
     */
    public function setDataApiRepository(GetDataApiRepository $dataApiRepository): void
    {
        $this->dataApiRepository = $dataApiRepository;
    }

    public function __construct(GetDataApiRepository $getDataApiRepository)
    {
        $this->dataApiRepository = $getDataApiRepository;
    }

    public static function getEntityFqcn(): string
    {
        return GetDataDataset::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $apiList = $this->dataApiRepository->findAll();
        $choices = [];

        foreach ($apiList as $api){
            $tmp = [
                $api->getId() => $api->getName()
            ];
            $choices = $tmp + $choices;
        }

        return [
            IdField::new('id')->hideOnForm(),
            /*CollectionField::new('getDataApi', 'API')
                ->setEntryType(GetDataApiFormType::class)
                ->allowAdd(1)
                ->allowDelete(1),*/
            ChoiceField::new('getDataApi', 'Api')
                ->setChoices($choices),
            TextField::new('name', 'Nom du dataset'),
            TextField::new('datasetId', 'Id unique du dataset'),
        ];
    }
}
