<?php

namespace App\Form;

use App\Entity\Dahiras;
use App\Entity\Encadreur;
use App\Entity\Reunion;
use App\Entity\Themes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReunionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('theme', EntityType::class, [
                'class' => Themes::class,
                'choice_label' => 'nom',
            ])
            ->add('lieu')
            ->add('sujetaborde')
            ->add('decisionprise')
            ->add('encadreur', EntityType::class, [
                'class' => Encadreur::class,
                'choice_label' => 'nom',
            ])
            ->add('dahiras', EntityType::class, [
                'class' => Dahiras::class,
                'choice_label' => 'nom',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reunion::class,
        ]);
    }
}
