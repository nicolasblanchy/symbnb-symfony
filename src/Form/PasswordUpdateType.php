<?php

namespace App\Form;

use App\Form\ApplicationType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordUpdateType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class, $this->getConfiguration("Ancien mot de passe", "Tapez votre ancien mot de passe"))
            ->add('newPassword', PasswordType::class, $this->getConfiguration("Nouveau mot de passe", "Veuillez entrer votre nouveau mot de passe"))                
            ->add('confirmPassword', PasswordType::class, $this->getConfiguration("Entrez votre nouveau mot de passe à nouveau", "Veuillez confirmer votre mot de passe"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
