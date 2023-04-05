<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'required'  => true,
                'attr'  =>  ['disabled'  => $options['disabled_fields']]
            ])
            ->add('lastName', TextType::class, [
                'required'  => true,
                'attr'  =>  ['disabled'  => $options['disabled_fields']]
            ])
            ->add('email', EmailType::class, [
                'required'  => true,
                'attr'  =>  ['disabled'  => $options['disabled_fields']]
            ])
        ;

        if ($options['show_password_field']) {
            $builder
                ->add('currentPassword', PasswordType::class, [
                    'required'  => false,
                    'mapped'    => false,
                    'attr'  =>  [
                        'disabled'  => $options['disabled_fields'],
                        'autocomplete'  => false,
                    ]
                ])
                ->add('password', PasswordType::class, [
                    'label' =>  'Current Password',
                    'required'  => false,
                    'mapped'    => false,
                    'attr'  =>  [
                        'disabled'  => $options['disabled_fields'],
                        'autocomplete'  => false,
                    ]
                ])
                ->add('confirmPassword', PasswordType::class, [
                    'required'  => false,
                    'mapped'    => false,
                    'attr'  =>  [
                        'disabled'  => $options['disabled_fields'],
                        'autocomplete'  => false,
                    ]
                ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'disabled_fields' => false,
            'show_password_field' => false,
        ]);

        $resolver
            ->setAllowedTypes('disabled_fields', 'bool')
            ->setAllowedTypes('show_password_field', 'bool');
    }
}
