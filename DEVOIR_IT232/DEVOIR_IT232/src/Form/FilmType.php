<?php

namespace App\Form;

use App\Entity\Film;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomFilm',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('auteurFilm',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('producteurFilm',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('dateDeProduction', DateType::class, [ "attr" => ["class" => "form-control"],
                'widget' => 'single_text',
            // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd', ])
            ->add('dateDePublication', DateType::class, [ "attr" => ["class" => "form-control"],
                'widget' => 'single_text',
        // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd', ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Film::class,
        ]);
    }
}
