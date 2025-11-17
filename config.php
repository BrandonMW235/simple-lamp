<?php
// Database connection parameters from Elastic Beanstalk environment
$db_hostname = $_SERVER['RDS_HOSTNAME'];
$db_port     = $_SERVER['RDS_PORT'];
$db_database = $_SERVER['RDS_DB_NAME'];
$db_username = $_SERVER['RDS_USERNAME'];
$db_password = $_SERVER['RDS_PASSWORD'];

// Image upload options
$storage_option = "hd";
$hd_folder  = "uploads";

// Simulate latency, in seconds
$latency = 0;

// Cache configuration
$enable_cache = false;
$cache_server = "dns-or-ip-of-memcached-server";
?>
