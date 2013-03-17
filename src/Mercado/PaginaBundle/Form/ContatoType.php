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
                ->add('email', 'email')
                ->add('telefoneResidencial', 'number', array(
                    'invalid_message' => 'O telefone deve conter apenas números, são %num%',
                    'invalid_message_parameters' => array('%num%' => 8),
                ))
        ;
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
