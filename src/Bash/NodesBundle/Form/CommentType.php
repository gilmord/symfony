<?php

namespace Bash\NodesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('user')
//          ->add('comment', 'textarea', array(
//              'attr' => array(
//                'class' => 'tinymce',
//                'data-theme' => 'bbcode'// simple, advanced, bbcode
//              )
//            ));
            //->add('created')
            //->add('blog_id')
         ->add('comment');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bash\NodesBundle\Entity\Comment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bash_nodesbundle_comment';
    }
}
