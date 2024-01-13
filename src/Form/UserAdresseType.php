<?php
// modification des informations d'adresse du users

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserAdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('numMaison', TextType::class,[
            'attr'=>[
                'class'=>'form-control',
                'minLength'=>1,
                'maxLength'=>50
            ],
            'label'=>'numéro de maison',
            'label_attr'=>[
                'class'=>'form-label'
            ],
            'constraints'=>[
                new Assert\notblank(),
                new Assert\Length(['min'=> 1,'max'=> 50])
            ]
        ])
        ->add('nomVoie', TextType::class,[
            'attr'=>[
                'class'=>'form-control',
                'minLength'=>1,
                'maxLength'=>50
            ],
            'label'=>'nom de la voie',
            'label_attr'=>[
                'class'=>'form-label'
            ],
            'constraints'=>[
                new Assert\notblank(),
                new Assert\Length(['min'=> 2,'max'=> 50])
            ]
        ])
        ->add('ville', TextType::class,[
            'attr'=>[
                'class'=>'form-control',
                'minLength'=>2,
                'maxLength'=>50
            ],
            'label'=>'ville',
            'label_attr'=>[
                'class'=>'form-label'
            ],
            'constraints'=>[
                new Assert\notblank(),
                new Assert\Length(['min'=> 2,'max'=> 50])
            ]
        ])
        ->add('codePostale', TextType::class,[
            'attr'=>[
                'class'=>'form-control',
                'minLength'=>2,
                'maxLength'=>50
            ],
            'label'=>'codePostale',
            'label_attr'=>[
                'class'=>'form-label'
            ],
            'constraints'=>[
                new Assert\notblank(),
                new Assert\Length(['min'=> 2,'max'=> 50])
            ]
        ])
        ->add('submit',SubmitType::class,[
            'attr'=>[
                'class'=>'btn btn-primary mt-4'
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
