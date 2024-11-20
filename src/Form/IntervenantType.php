<?php

namespace App\Form;

use App\Entity\Dahiras;
use App\Entity\Intervenant;
use App\Entity\Membres;
use App\Entity\Reunion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IntervenantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('membre', EntityType::class, [
                'class' => Membres::class,
                'choice_label' => 'id',
            ])
            ->add('reunion', EntityType::class, [
                'class' => Reunion::class,
                'choice_label' => 'id',
            ])
            ->add('dahira', EntityType::class, [
                'class' => Dahiras::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Intervenant::class,
        ]);
    }
}
