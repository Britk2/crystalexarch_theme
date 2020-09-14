<?php


/*Check PHP version*/
if(version_compare('7.3', phpversion(),'>')){
    echo 'You must be using PHP 7.3.7 or greater.';
}

/* Check WP Version */

if(version_compare($GLOBALS['wp_version'], '5.4.2', '<')){
   echo 'WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site ASAP';
}
