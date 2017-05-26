<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 19/05/17
 * Time: 10:21
 */

namespace NLF\TvShowManagerBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('season', IntegerType::class)
            ->add('number', IntegerType::class)
            ->add('note', IntegerType::class)
            ->add('tvshow', EntityType::class, array(
                'class' => 'NLFTvShowManagerBundle:TvShow',
                'choice_label' => 'name',
                'multiple' => false
            ))
            ->add('submit', SubmitType::class);
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NLF\TvShowManagerBundle\Entity\Episode'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nlf_tvshowmanager_episode';
    }
}