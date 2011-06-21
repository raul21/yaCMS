<?php
/**
 * Constants for Admin panel
 */

define('PATH_MSG_FILE', DATA_ROOT . DIRECTORY_SEPARATOR . 'gbook'
    . DIRECTORY_SEPARATOR . 'msg.json');
define('PATH_BAN_FILE', DATA_ROOT . DIRECTORY_SEPARATOR . 'gbook'
    . DIRECTORY_SEPARATOR . 'bans');

const ERR_PASS = 1;
const ERR_READING = 2;
const ERR_FOPEN_ADMIN = 3;
const ERR_DIR = 4;
const ERR_NO_PASS = 5;
const ERR_COOKIE = 6;

//Controls constnats
const ERR_NO_IP = 7;
const ERR_FOPEN_BAN_FILE = 8;
const BANNED = 9;
const UNBANNED = 10;