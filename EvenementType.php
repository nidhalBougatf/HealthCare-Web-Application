<?php

namespace MyApp\UserBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')->add('dateDebutstr',TextType::class,array('disabled'=>true))->add('latitude', HiddenType::class)->add('longitude', HiddenType::class)->add('dateFinstr',TextType::class,array('disabled'=>true))->add('description')->add("affiche",FileType::class)->add('lieu')->add('frais')->add('sommite')->add('contact')->add('typeE',ChoiceType::class,array('choices' =>
            array('Sportif'=>'Sportif','Musicale'=>'Musicale','Competition'=>'Competition' ,'Marathon'=>'Marathon' )))
            ->add('color',ChoiceType::class,array('choices' =>
            array('Bleu nuit'=>'#0071c5','Turquoise'=>'#40E0D0','Vert'=>'#008000' ,'Orange'=>'#FF8C00','Rouge'=>'#FF0000' ,'Noir'=>'#000' , 'Jaune'=>'#FFD700' )))
            ->add('valider',SubmitType::class);
        $builder->get('affiche')->addModelTransformer(new CallbackTransformer(
            function($image) {
                return null;
            },
            function($image) {
                return $image;
            }
        ));
            //->add('description')->add('affiche')->add('dateDebut',DateTimeType::class)->add('dateFin',DateTimeType::class)->add('lieu')->add('frais')->add('sommite')->add('contact')->add('typeE')->add('color')->add('valider',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\UserBundle\Entity\Evenement'

        ));
        /*Dark blue</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                    <option style="color:#008000;" value="#008000">&#9724; Green</option>
                                    <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                    <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                    <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                    <option style="color:#000;" value="#000">&#9724; Black</o*/
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myapp_userbundle_evenement';
    }


}
