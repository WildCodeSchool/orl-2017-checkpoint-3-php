<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 19/05/17
 * Time: 10:21
 */

namespace NLF\TvShowManagerBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TvShowType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('type', ChoiceType::class,array(
                'expanded' => true,
                'choices' => array(
                    'Action' => 'Action',
                    'Horror' => 'Horror',
                    'Fun' => 'Fun'
                )
            ))
            ->add('url', TextType::class)
            ->add('year', TextType::class)
        ->add('submit', SubmitType::class);

    }
//                    \Locale::getDefault()
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NLF\TvShowManagerBundle\Entity\TvShow'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nlf_tvshowmanager_tvshow';
    }
}