<?php 

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options):void
    {
        $builder
        ->add('plainPassword',passwordType::class,[
            'attr'=>['class'=>'form-control'],
            'label'=>'Password',
            'label_attr'=>['class'=>'form-label mt-4'],
            'constraints'=>[new Assert\NotBlank()]
        ])
        ->add('newPassword', RepeatedType::class,[
            'type'=> PasswordType::class,
                'first_options'=>[
                    'attr'=>[
                        'class'=>'form-control'
                    ],
                    'label'=>'New Password',
                    'label_attr'=>[
                        'class'=> 'form-label'
                    ],
                ],
                'second_options'=>[
                    'attr'=>[
                        'class'=>'form-control'
                    ],
                    'label'=>"Confirm new password",
                    'label_attr'=>[
                        'class'=>'form-label'
                    ],
                ],
                'invalid_message'=>"The passwords do not match"
        ])
        ->add('submit', SubmitType::class,[
            'attr'=>['class'=>'btn btn-primary mt-4'],
            'label'=>'Change password'
        ]);
    }
}
?>