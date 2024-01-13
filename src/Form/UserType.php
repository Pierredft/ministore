<?php
// modification des informations d'identité du users

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class,[
            'attr'=>[
                'class'=>'form-control',
                'minLength'=>2,
                'maxLength'=>50
            ],
            'label'=>'Nom',
            'label_attr'=>[
                'class'=>'form-label'
            ],
            'constraints'=>[
                new Assert\Length(['min'=> 2,'max'=> 50])
            ]
        ])
        ->add('prenom', TextType::class,[
            'attr'=>[
                'class'=>'form-control',
                'minLength'=> 2,
                'maxLength'=> 50
            ],
            'label'=>'Prenom',
            'label_attr'=>[
                'class'=>'form-label'
            ],
            'constraints'=>[
                new Assert\Length(['min'=>2,'max'=> 50])
            ] 
        ])
        ->add('email',EmailType::class,[
            'attr'=>[
                'class'=>'form-control',
                'minLength'=>2,
                'maxLength'=>50,
            ],
            'label'=>'Adress email',
            'label_attr'=>[
                'class'=>'form-label',
            ],
            'constraints'=>[
                new Assert\NotBlank(),
                new Assert\Email(),
                new Assert\Length(['min'=>2,'max'=>50,]),
            ]
        ])
        ->add('numTel', TextType::class,[
            'attr'=>[
                'class'=>'form-control',
                'minLength'=>2,
                'maxLength'=>50
            ],
            'label'=>'numéro de telephone',
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
