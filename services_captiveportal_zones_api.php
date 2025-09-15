<?php
require_once("captiveportal.inc");

global $cpzone;
global $cpzoneid;

init_config_arr(array('captiveportal'));
$a_cp = &$config['captiveportal'];


$data = [];

foreach ($a_cp as $cpzone => $cpitem) {
    if (!is_array($cpitem)) {
        continue;
    }

    $cpifaces = explode(",", $cpitem['interface']);

    foreach ($cpifaces as $cpiface) {
        $interfaces = convert_friendly_interface_to_friendly_descr($cpiface);

        $data[$interfaces] = count(captiveportal_read_db());
    }
}

echo json_encode($data);
?>


