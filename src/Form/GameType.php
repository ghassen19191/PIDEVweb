<?php

namespace App\Form;

use App\Entity\Game;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',null, array('label' => 'form.name','required' => false))
            ->add('category', ChoiceType::class, [
                'choices'  => [
                    'Sport' => 'Sport' ,
                    'Adventure' => 'Adventure',
                    'Battle Royale' => 'Battle Royale',
                ],
            ])
            ->add('description' ,null, array('label' => 'form.name','required' => false))
            ->add('release_year',null, array('label' => 'form.name','required' => false))
            ->add('price',null, array('label' => 'form.name','required' => false))
            ->add('stock' ,null, array('label' => 'form.name','required' => false))
            ->add('photo',FileType::class, array(
                'label'=>'Photo',
                'attr'=>[
                    'placeholder'=>'Photo',
                    'mapped'=>false,
                    

                ],
                'data_class' => null

            ))
            ->add('Save', SubmitType::class ,[
                'attr' => [
                    'class'=>'post_jp_btn',
                    'label'=>'Save'
                ]
                
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
        ]);
    }
}
