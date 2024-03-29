<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanySettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'Company\'s name',
                'attr' => ['disabled' => $options['disabled_fields']]
            ])
            ->add('email', EmailType::class, [
                'required'  => false,
                'attr' => ['disabled' => $options['disabled_fields']]
            ])
            ->add('phone', TelType::class, [
                'required'  => false,
                'attr' => ['disabled' => $options['disabled_fields']]
            ])
            ->add('currency', CurrencyType::class, [
                'required' => true,
                'attr' => ['disabled' => $options['disabled_fields']]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
            'disabled_fields' => false,
        ]);

        $resolver->setAllowedTypes('disabled_fields', 'bool');
    }
}
