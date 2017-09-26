<?php
namespace EprimaireBundle\EprimaireBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        /*$builder->add('nom',TextType::class,array('attr'=>array('placeholder'=>'Nom Prenom(s)')))
            ->add('roles',CollectionType::class, array( 'entry_type'    =>  ChoiceType::class,
                'entry_options' =>  array(  'label'     => false, /* Ajoutez cette ligne */
                    /* 'choices'   => array(
                        'SUPER ADMINISTRATEUR' => 'ROLE_SUPER_ADMIN',
                        'GERANT' => 'ROLE_GERANT'
                    ))))
        ;*/
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EprimaireBundle\EprimaireBundle\Entity\User'
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'EprimaireBundle_EprimaireBundle_user';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

}
