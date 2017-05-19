<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 19/05/17
 * Time: 11:57
 */

namespace TvShowManagerBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TvShowType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, ['label' => 'Nom :']);
        $builder->add('type', TextType::class, ['label' => 'Type :']);
        $builder->add('url', UrlType::class, ['label' => 'Url :']);
        $builder->add('year', IntegerType::class, ['label' => 'Année :']);
        $builder->add('submit', SubmitType::class, ['label' => 'Créer !']);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TvShowManagerBundle\Entity\TvShow'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tvshowmanagerbundle_tvshow';
    }

}