<?php

spl_autoload_register(function($class){
    require 'db/'.$class.'.php';
});