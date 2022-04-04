<?php
echo json_encode(getdata($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['key']));

function getdata($username, $password, $formkey)
{
    exec("curl -u " . $username . ":" . $password . " https://kf.kobotoolbox.org/assets/" . $formkey . "/submissions/?format=json", $output, $retval);
    return json_decode($output[0]);
}
