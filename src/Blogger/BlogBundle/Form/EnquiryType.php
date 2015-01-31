<?php
/**
 * @author Martin Tawse martin.tawse@gmail.com
 * Date: 31/01/2015
 */

namespace Blogger\BlogBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class EnquiryType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('email', 'email');
        $builder->add('subject');
        $builder->add('body', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
} 