<?php

namespace App\Form;

use App\Entity\TfdFilaAtendimentoFaixaEtaria;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostFaixaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idadeInicio')
            ->add('idadeFim')
            ->add('qtd')
            ->add('utilizado')
            ->add('ordem')
            ->add('codigoFilaAtendimento')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TfdFilaAtendimentoFaixaEtaria::class,
        ]);
    }
}
