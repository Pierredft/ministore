<?php

namespace App\Controller\Admin;

use App\Entity\Logo;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LogoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Logo::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('imgLogo')
                        ->setBasePath('images/')
                        ->setUploadDir('public/images/logo')
                        ->setRequired($pageName !== Crud::PAGE_EDIT)
                        ->setFormTypeOptions($pageName !== Crud::PAGE_EDIT ? ['allow_delete' => false] : []),
        ];
    }
}
