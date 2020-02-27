<?php

namespace App\Application\Sonata\UserBundle\Admin;

use Sonata\UserBundle\Admin\Model\UserAdmin as BaseUserAdmin;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends BaseUserAdmin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper): void
    {
        parent::configureFormFields($formMapper);

        $formMapper->removeGroup('Social', 'User');
        $formMapper->removeGroup('Profile', 'User');
        $formMapper->removeGroup('Groups', 'Security');
        $formMapper->removeGroup('Keys', 'Security');
    }
}