<?php

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");


function exporter_config() {
    $configarray = array(
        "name" => "Mailchimp",
        "description" => "WHMCS MailChimp Tools and stuff and some little bit of other shit all around in one place.",
        "version" => "0000.00.00",
        "author" => "Savand Bros",
        "language" => "english",
        "fields" => array(
            "api_key" => array (
                "FriendlyName" => "API KEY",
                "Type" => "text",
                "Size" => "55",
                "Description" => "MailChimp API KEY",
                "Default" => "",
            ),
            "client_list" => array(
                'FriendlyName' => "Client's List",
                "Type" => "text",
                "Size" => "55",
                "Description" => "Client's List ID to subscribe new clients into the list",
                "Default" => "",
            )
        ));

    return $configarray;
}

function exporter_activate() {
    return array(
        'status' => 'success',
        'description' => "Let's assume it will work when it should."
    );
}

function exporter_deactivate() {
    return array(
        'status'=>'success',
        'description'=> "Deactivated somehow!"
    );
}

function exporter_upgrade($vars) {
    # Nothing to do!
}

