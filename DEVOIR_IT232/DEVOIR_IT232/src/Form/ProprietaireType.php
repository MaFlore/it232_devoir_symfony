<?php

namespace App\Form;

use App\Entity\Proprietaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProprietaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('prenom',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('nomUtilisateur',TextType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('password',PasswordType::class, [ "attr" => ["class" => "form-control"] ])
            ->add('email',TextType::class, [ "attr" => ["class" => "form-control"] ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proprietaire::class,
        ]);
    }
}
