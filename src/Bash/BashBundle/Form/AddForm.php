<?php

namespace Bash\BashBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Genemu\Bundle\FormBundle\Twig;
use Genemu\Bundle\FormBundle;


use Genemu\Bundle\FormBundle\DependencyInjection\Compiler\FormPass;
class AddForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder
//          ->add('subject', 'genemu_tinymce');
        $builder
          ->add('subject', 'genemu_tinymce')
          ->add('download', 'genemu_jqueryfile')
          ->add('image', 'genemu_jqueryimage')
          ->add('rating', 'genemu_jqueryrating')
         ->add('readonly_rating', 'genemu_jqueryrating', array(
             'configs' => array(
                'readOnly' => true
              )
            ));
    }

    public function getName()
    {
        return 'AddForm';
    }
}