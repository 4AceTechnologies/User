<?php
/**
 * @package   ImpressPages
 */



namespace Plugin\User;


class Model {

    public static function loginForm()
    {
        $form = new \Ip\Form();

        $field = new \Ip\Form\Field\Text(
            array(
                'name' => 'username', // HTML "name" attribute
                'label' => __('Username or email', 'User', false) // Field label that will be displayed next to input field
            ));
        $form->addField($field);

        $field = new \Ip\Form\Field\Password(
            array(
                'name' => 'password', // HTML "name" attribute
                'label' => __('Password', 'User', false) // Field label that will be displayed next to input field
            ));
        $form->addField($field);

        $form = ipFilter('User_loginForm', $form);

        return $form;
    }

    public static function registrationForm()
    {
        $form = new \Ip\Form();

        $field = new \Ip\Form\Field\Email(
            array(
                'name' => 'email', // HTML "name" attribute
                'label' => __('Email', 'User', false) // Field label that will be displayed next to input field
            ));
        $form->addField($field);

        $field = new \Ip\Form\Field\Password(
            array(
                'name' => 'password', // HTML "name" attribute
                'label' => __('Password', 'User', false) // Field label that will be displayed next to input field
            ));
        $form->addField($field);

        $form = ipFilter('User_registrationForm', $form);

        return $form;
    }

    public static function passwordResetForm()
    {
        $form = new \Ip\Form();

        $field = new \Ip\Form\Field\Text(
            array(
                'name' => 'username', // HTML "name" attribute
                'label' => __('Username or email', 'User', false) // Field label that will be displayed next to input field
            ));
        $form->addField($field);

        $field = new \Ip\Form\Field\Captcha(
            array(
                'name' => 'captcha', // HTML "name" attribute
                'label' => __('Prove you are a human', 'User', false) // Field label that will be displayed next to input field
            ));
        $form->addField($field);

        $form = ipFilter('User_passwordResetForm', $form);

        return $form;
    }

    public static function passwordUpdateForm()
    {
        $form = new \Ip\Form();

        $field = new \Ip\Form\Field\Password(
            array(
                'name' => 'newPassword', // HTML "name" attribute
                'label' => __('New password', 'User', false) // Field label that will be displayed next to input field
            ));
        $form->addField($field);


        $form = ipFilter('User_passwordUpdateForm', $form);

        return $form;

    }



}
