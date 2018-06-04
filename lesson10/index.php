<?php

$animals = ['cachorro', 'gato'];

require_once 'functions.php';

if (checkAge(22)) {
    echo 'Pode entrar';
} else {
    echo 'Sai daqui';
}

dd($animals);
