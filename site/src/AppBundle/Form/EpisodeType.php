<?php
/**
 * Created by PhpStorm.
 * User: MansourPC
 * Date: 28/02/2018
 * Time: 10:07
 */

namespace AppBundle\Form;


use AppBundle\Entity\Series;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class EpisodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('description', TextareaType::class)
            ->add('video', TextType::class)
            ->add('durationTime', DateType::class)
            ->add('serie', EntityType::class)
//            ->add('serie', EntityType::class, [
//                'class'=>Series::class,
//           'name' => 'name',
//            'description' => 'description',
//            'creationDate' => 'creation',
//            'releaseDate' => 'releaseDate',
//            'durationTime' => 'durationTime',
//            ])
            ->add('save', SubmitType::class, ['label' => 'Ajouter une Episode'])
        ;
    }
}