<?php
// Database connection parameters from Elastic Beanstalk environment
$db_hostname = getenv("DB_HOST");
$db_port     = getenv("DB_PORT");
$db_database = getenv("DB_NAME");
$db_username = getenv("DB_USER");
$db_password = getenv("DB_PASS");

// Image upload options
$storage_option = "hd";
$hd_folder  = "uploads";

// Simulate latency, in seconds
$latency = 0;

// Cache configuration
$enable_cache = false;
$cache_server = "dns-or-ip-of-memcached-server";
?>
