<?php

namespace App\Form;

use App\Entity\DetailReunion;
use App\Entity\Membres;
use App\Entity\Reunion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailReunionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('present')
            ->add('sujetAbordes')
            ->add('decisionsprises')
            ->add('reunion', EntityType::class, [
                'class' => Reunion::class,
                'choice_label' => 'id',
            ])
            ->add('membre', EntityType::class, [
                'class' => Membres::class,
                'choice_label' => 'nom',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DetailReunion::class,
        ]);
    }
}
