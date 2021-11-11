<?php
/*
 * Plugin Name: ISC Roles
 * Plugin URI:
 * Description: Just the ISC Roles with No Management Tools
 * Version: 1.1.0
 * Author: Nathan Eggers and Joshua Trimm
 * Author URI:
 */
require 'mknewroles.php';

//if this fails, then callable function must be included in this file instead.
register_activation_hook(__FILE__, 'mk_new_roles');
?>
