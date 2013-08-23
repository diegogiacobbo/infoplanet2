<?php

namespace Mercado\PaginaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContatoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('contato', 'textarea')
                ->add('data', 'hidden', array('attr' => array('style' => 'display:none;')))
                ->add('emailSecundario', 'choice', array(
    'choices' => array('foo' => 'Foo', 'bar' => 'Bar', 'baz' => 'Baz'),
    'preferred_choices' => array('Sugestao') ,'empty_value' => 'Sugestao'))
                ->add('email', 'email', array('attr' => array('value' => 'e-mail')))
                ->add('telefoneResidencial', 'number', array(
                    'invalid_message' => 'O telefone deve conter apenas números, são %num%',
                    'invalid_message_parameters' => array('%num%' => 8),
                		 'attr' => array('value' => 'tel')
                ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mercado\PaginaBundle\Entity\Contato'
        ));
    }

    public function getName() {
        return 'mercado_paginabundle_contatotype';
    }
}