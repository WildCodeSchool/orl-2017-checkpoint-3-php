<?php

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * Created by PhpStorm.
 * User: wilder3
 * Date: 19/05/17
 * Time: 11:36
 */
class TvShowType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => "Nom du TV Show"
            ))
            ->add('type', TextType::class, array(
                'label' => "Genre du TV Show"
            ))
            ->add('year', IntegerType::class)
            ->add('url', TextType::class, array(
                'label' => "Lien vers le TV Show"
            ));
    }
}