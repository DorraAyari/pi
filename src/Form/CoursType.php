<?php

namespace App\Form;

use App\Entity\Coach;
use App\Entity\Cours;
use App\Entity\Salle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Form\DataTransformer\StringToFileTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CoursType extends AbstractType
{    public $image_name;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom',TextType::class)
        ->add('description',TextType::class)
        
        ->add('image', FileType::class, [
            'label' => false,
            'multiple' => true,
            'mapped' => false,
            'empty_data' => '',

            
        ])
        ->add(
            'Coach', EntityType::class,
            [
                'class' => Coach::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,

            ]
            
        )
        ->add(
            'Salle', EntityType::class,
            [
                'class' => Salle::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,

            ]
            
        )   

    ;
 //   $builder->get('image')->addModelTransformer(new StringToFileTransformer());

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}