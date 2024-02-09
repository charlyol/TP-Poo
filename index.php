<?php

use class\form;

$form = new Form(array(
    'username' => 'Unknown'
));
echo $form->input('username');
echo $form->input('password');
echo $form->submit();


$form = new Form();
echo $form->input('firstName');
echo $form->input('name');
echo $form->input('mail');
echo $form->input('pseudo');
echo $form->input('password');
echo $form->submit();