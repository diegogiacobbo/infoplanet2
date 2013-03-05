<?php

namespace Mercado\PaginaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContatoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contato')
            ->add('data')
            ->add('email')
            ->add('emailSecundario')
            ->add('telefoneResidencial')
            ->add('telefoneComercial')
            ->add('telefoneCelular')
            ->add('logradouro')
            ->add('numero')
            ->add('bairro')
            ->add('usuario')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mercado\PaginaBundle\Entity\Contato'
        ));
    }

    public function getName()
    {
        return 'mercado_paginabundle_contatotype';
    }
}
