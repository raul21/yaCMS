<?php
/**
 * Defined constants for the gallery script
 */

define('PATH', BASE_DIR . DIRECTORY_SEPARATOR . 'uploads'
    . DIRECTORY_SEPARATOR);

const OK = 0;
const ERR_IS_DIR = 1;
const ERR_NO_DIR = 2;
const ERR_OPEN_DIR = 3;
const ERR_ONLY_IMAGES = 4;
