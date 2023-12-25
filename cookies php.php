<?php
$cookie_name = "user";
$cookie_value = "name";
setcookie($cookie_name, $cookie_value, time() + (86400 )); // 86400 = 1 day //24HOUR *30MIN *30SEC
?>