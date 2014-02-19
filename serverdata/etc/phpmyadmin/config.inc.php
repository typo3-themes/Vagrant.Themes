<?php
/**
 * Debian local configuration file
 *
 * This file overrides the settings made by phpMyAdmin interactive setup
 * utility.
 *
 * For example configuration see /usr/share/doc/phpmyadmin/examples/config.default.php.gz
 *
 * NOTE: do not add security sensitive data to this file (like passwords)
 * unless you really know what you're doing. If you do, any user that can
 * run PHP or CGI on your webserver will be able to read them. If you still
 * want to do this, make sure to properly secure the access to this file
 * (also on the filesystem level).
 */

/**
 * Server(s) configuration
 */
$i = 0;
// The $cfg['Servers'] array starts with $cfg['Servers'][1].  Do not use $cfg['Servers'][0].
// You can disable a server config entry by setting host to ''.
$i++;

/**
 * Read configuration from dbconfig-common
 * You can regenerate it using: dpkg-reconfigure -plow phpmyadmin
 */
if (is_readable('/etc/phpmyadmin/config-db.php')) {
    require('/etc/phpmyadmin/config-db.php');
}

/* Configure according to dbconfig-common if enabled */
if (!empty($dbname)) {
    /* Authentication type */
    $cfg['Servers'][$i]['auth_type'] = 'config';
    /* Server parameters */
    if (empty($dbserver)) $dbserver = 'localhost';
    $cfg['Servers'][$i]['host'] = $dbserver;

    if (!empty($dbport)) {
        $cfg['Servers'][$i]['connect_type'] = 'tcp';
        $cfg['Servers'][$i]['port'] = $dbport;
    }
    //$cfg['Servers'][$i]['compress'] = false;
    /* Select mysqli if your server has it */
    $cfg['Servers'][$i]['extension'] = 'mysqli';
    /* Optional: User for advanced features */
	$cfg['Servers'][$i]['user']        = 'root';
	$cfg['Servers'][$i]['password']    = '';
	$cfg['Servers'][$i]['controluser'] = 'root';
    $cfg['Servers'][$i]['controlpass'] = '';
    /* Optional: Advanced phpMyAdmin features */
    $cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
    $cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
    $cfg['Servers'][$i]['relation'] = 'pma__relation';
    $cfg['Servers'][$i]['table_info'] = 'pma__table_info';
    $cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
    $cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
    $cfg['Servers'][$i]['column_info'] = 'pma__column_info';
    $cfg['Servers'][$i]['history'] = 'pma__history';
    $cfg['Servers'][$i]['designer_coords'] = 'pma__designer_coords';
    $cfg['Servers'][$i]['tracking'] = 'pma__tracking';

    /* Uncomment the following to enable logging in to passwordless accounts,
     * after taking note of the associated security risks. */
    $cfg['Servers'][$i]['AllowNoPassword'] = TRUE;

    /* Advance to next server for rest of config */
    $i++;
}

/* Authentication type */
//$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
//$cfg['Servers'][$i]['host'] = 'localhost';
//$cfg['Servers'][$i]['connect_type'] = 'tcp';
//$cfg['Servers'][$i]['compress'] = false;
/* Select mysqli if your server has it */
//$cfg['Servers'][$i]['extension'] = 'mysql';
/* Optional: User for advanced features */
// $cfg['Servers'][$i]['controluser'] = 'pma';
// $cfg['Servers'][$i]['controlpass'] = 'pmapass';
/* Optional: Advanced phpMyAdmin features */
// $cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
// $cfg['Servers'][$i]['bookmarktable'] = 'pma_bookmark';
// $cfg['Servers'][$i]['relation'] = 'pma_relation';
// $cfg['Servers'][$i]['table_info'] = 'pma_table_info';
// $cfg['Servers'][$i]['table_coords'] = 'pma_table_coords';
// $cfg['Servers'][$i]['pdf_pages'] = 'pma_pdf_pages';
// $cfg['Servers'][$i]['column_info'] = 'pma_column_info';
// $cfg['Servers'][$i]['history'] = 'pma_history';
// $cfg['Servers'][$i]['designer_coords'] = 'pma_designer_coords';
/* Uncomment the following to enable logging in to passwordless accounts,
 * after taking note of the associated security risks. */
// $cfg['Servers'][$i]['AllowNoPassword'] = TRUE;

/*
 * End of servers configuration
 */

/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

$cfg['CheckConfigurationPermissions'] = false;
