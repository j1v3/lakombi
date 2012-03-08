<?php
namespace LaKombi\UsersBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use LaKombi\UsersBundle\Form\Type\UserPictureType;

class UserDataType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('nickname')
            ->add('sex')
            ->add('adress1')
            ->add('adress2')
            ->add('zip_code')
            ->add('city')
            ->add('country')
            ->add('tel1')
            ->add('tel2')
            ->add('fax')
            ->add('mail')
            ->add('web')
            ->add('news');
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'LaKombi\UsersBundle\Entity\UserData',
        );
    }

    public function getName()
    {
        return 'UserData';
    }
}
