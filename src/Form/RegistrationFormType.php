<?php

namespace App\Form;

use App\Entity\User;
use PharIo\Manifest\Email;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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
                    new Assert\notblank(),
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
            ->add('agreeTerms', CheckboxType::class, [
                                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class,[
                'type'=> PasswordType::class,
                    'first_options'=>[
                        'attr'=>[
                            'class'=>'form-control'
                        ],
                        'label'=>'Mot de passe',
                        'label_attr'=>[
                            'class'=> 'form-label'
                        ],
                    ],
                    'second_options'=>[
                        'attr'=>[
                            'class'=>'form-control'
                        ],
                        'label'=>"Confirmation du mot de passe",
                        'label_attr'=>[
                            'class'=>'form-label'
                        ],
                    ],
                    'invalid_message'=>"Les mots de passe ne correspondent pas"
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
                    new Assert\Length(['min'=> 2,'max'=> 50])
                ]
            ])
            ->add('nomVoie', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'minLength'=>2,
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
