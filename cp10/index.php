<?php

require 'functions.php';

$allowed_message;

if (ageTest($_GET['age'])) {
    $allowed_message = 'You are old enough, see you there, have fun! :D';
} else {
    $allowed_message = 'You are not old enough, sorry.';
}

require 'index.view.php';
