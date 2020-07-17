<?php

namespace App\Form;

use App\Entity\TfdFilaAtendimento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostFilaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('codigoUltimoUsuario')
            ->add('datareg')
            ->add('ativo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TfdFilaAtendimento::class,
        ]);
    }
}
