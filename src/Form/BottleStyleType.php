<?php

namespace App\Form;

use App\Entity\Bottle;
use App\Entity\Storage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BottleStyleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('bottleName')
            ->add('bottleType')
            ->add('bottleYear')
            ->add('wineMaker')
            ->add('country')
            ->add('storage', EntityType::class, [
                'class' => Storage::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bottle::class,
        ]);
    }
}
