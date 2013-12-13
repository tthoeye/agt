<?php
/*
 * Configuration settings
*/

// directories
define("HTDOCS_ROOT", "C:/wamp/www/");                 //Don't forget to insert the web root directory (for example: 
                                             // "C:/wamp/www/")
define("BASE_DIR", "app-generator/" );
define("CLASSES_DIR", "php/");
define("CLASSES", HTDOCS_ROOT . BASE_DIR . CLASSES_DIR);
//define("SERVERNAME", "http://10.1.1.1/");       //Don't forget to replace localhost
define("SERVERNAME", "http://localhost/");      //with your IP address, if you want to connect to the template with your mobile phone

//Proxy settings
define("PROXYUSE", false); 
define("PROXYNAME", "10.1.1.51"); // without the "http://"
define("PROXYPORT", "8080"); 

// database
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_HOSTNAME", "localhost");
define("DB_PORT", "3306");
define("DB_NAME", "citadel_app_generator");

define("DEBUG", true);

// views
 
define("MAP_CENTER_LATITUDE", 37.957243);
define("MAP_CENTER_LONGITUDE", 23.721521);
define("MAP_ZOOM", 2);

// dataset
define("DATASET_FILE", HTDOCS_ROOT . BASE_DIR ."data/POI_athens.json");
define("DATASET_ID", 36);
define("DATASET_URL", SERVERNAME . BASE_DIR . "dataset.php");
define("USE_DATABASE", true);

?>