<?php

function mailchimp_get_setting_value($setting, $default = null) {
    $result = mysql_fetch_assoc(full_query("select value from tbladdonmodules where module = 'mailchimp' AND setting = '".mysql_real_escape_string($setting)."'"));

    if (isset($result["value"]))
        return $result["value"];
    else {
        return $default;
    }
}
