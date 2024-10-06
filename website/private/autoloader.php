<?php
spl_autoload_register(function ($class_name) {
    include "manager/$class_name.php";
});
require_once "../private/include/config.php";