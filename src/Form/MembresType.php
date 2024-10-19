<?php

namespace App\Form;

use App\Entity\Dahiras;
use App\Entity\Encadreur;
use App\Entity\Membres;
use App\Entity\Specialites;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MembresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('adresse')
            ->add('email')
            ->add('specialite', EntityType::class, [
                'class' => Specialites::class,
                'choice_label' => 'nom',
                'multiple' => true,
            ])
       ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Membres::class,
        ]);
    }
}
