<?php

namespace OrderBundle\Form;

use OrderBundle\Entity\OrderInfo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonalInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('customerFirstName', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'label' => 'Nom',
                ),
            ))
            ->add('customerLastName', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'label' => 'Prenom',
                ),
            ))
            ->add('customerEmail', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'label' => 'Email',
                ),
            ))
            ->add('customerPhone', NumberType::class, array(
                'required' => true,
                'attr' => array(
                    'label' => 'Téléphone',
                ),
            ))
            ->add('customerCity', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'label' => 'Ville',
                ),
            ))
            ->add('customerAddress', TextType::class, array(
                'required' => true,
                'attr' => array(
                    'label' => 'adresse',
                ),
            ))
            ->add('postalCode', NumberType::class, array(
                'required' => true,
                'attr' => array(
                    'label' => 'Code postal',
                ),
            ))
            ->add('save',  SubmitType::class, array(
                'label' => 'Placer Commande',
                'attr' => array(
                    'class' => 'btn karl-checkout-btn'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => OrderInfo::class,
        ));
    }
}