<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            NumberField::new('prix'),
            TextField::new('stock'),
            TextareaField::new('description'),
            TextareaField::new('caracteristique'),
            ImageField::new('image')
                        ->setBasePath('images/')
                        ->setUploadDir('public/images/produits')
                        ->setRequired($pageName !== Crud::PAGE_EDIT)
                        ->setFormTypeOptions($pageName !== Crud::PAGE_EDIT ? ['allow_delete' => false] : []),

            AssociationField::new('type')
        ];
    }
}
