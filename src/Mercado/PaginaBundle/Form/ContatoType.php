<?php

namespace Mercado\PaginaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContatoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        		->add('data', 'hidden', array('attr' => array('style' => 'display:none;')))
        		->add('nome', 'text', array('attr' => array('value' => 'nome')))
                ->add('email', 'email', array('attr' => array('value' => 'e-mail')))
                ->add('emailSecundario', 'choice', array(
    'choices' => array('sugestao' => 'Sugestão', 'duvida' => 'Dúvida', 'reclamacao' => 'reclamação'),
    'preferred_choices' => array('Assunto') ,'empty_value' => 'Assunto'))
//                 ->add('telefoneResidencial', 'number', array(
//                     'invalid_message' => 'O telefone deve conter apenas números, são %num%',
//                     'invalid_message_parameters' => array('%num%' => 8),
//                 		 'attr' => array('value' => 'tel')
//                 ))
                ->add('contato', 'textarea');
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