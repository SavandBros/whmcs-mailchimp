<?php

require '../../../../vendor/autoload.php';

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");


function add_new_subscriber($vars) {
    $MailChimp = new \Drewm\MailChimp(mailchimp_get_setting_value('api_key'));

    $result = $MailChimp->call('lists/subscribe', array(
        'id' => mailchimp_get_setting_value('client_list'),
        'email' => array('email' => $vars['email']),
        'merge_vars' => array(
            'COMNAME' => $vars['companyname'],
            'FNAME' => $vars['firstname'],
            'LNAME' => $vars['lastname'],
            'ID' => $vars['userid']
        ),
    ));
}

add_hook("ClientAdd", 1, "add_new_subscriber");
