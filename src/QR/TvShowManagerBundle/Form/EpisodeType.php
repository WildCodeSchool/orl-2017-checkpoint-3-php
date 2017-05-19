<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 19/05/17
 * Time: 10:40
 */

namespace QR\TvShowManagerBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('name',         TextType::class)
            ->add('season',    IntegerType::class)
            ->add('number',         IntegerType::class)
            ->add('note',         IntegerType::class)
            ->add('submit',         SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'QR\TvShowManagerBundle\Entity\Episode'
        ));
    }
}