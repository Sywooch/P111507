<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    $htp = "https://";
} else {
    $htp = "http://";
}
Yii::setAlias('webDomain', "$htp$_SERVER[HTTP_HOST]");
Yii::setAlias('baseDomain', "https://quickrep.com");
