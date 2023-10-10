<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\ArticleCategory;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('barcode')
            ->add('price')
            ->add('quantity')
            ->add('minimumQuantityLimit')
            ->add('category', EntityType::class, [
                'class' => ArticleCategory::class,
                'query_builder' => function (EntityRepository $er) use ($options): QueryBuilder {
                    return $er->createQueryBuilder('ac')
                        ->where('ac.company =  :companyId')
                        ->setParameter('companyId', $options['companyId'])
                        ->orderBy('ac.name', 'ASC');
                },
            ])
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
            'companyId' => 0
        ]);


        $resolver->setAllowedTypes('companyId', 'int');
    }
}
