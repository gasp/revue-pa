<?php

define('_NO_CACHE', -1);
define('_INTERDIRE_COMPACTE_HEAD_ECRIRE', true);
error_reporting(E_ALL^E_NOTICE);
ini_set ("display_errors", "Off");
define('SPIP_ERREUR_REPORT',E_ALL);
$GLOBALS['taille_des_logs'] = 500;
define('_MAX_LOG', 500000);
define('_LOG_FILELINE',true);
define('_LOG_FILTRE_GRAVITE',8);
define('_DEBUG_AUTORISER', true);
define('_DEBUG_SLOW_QUERIES', true);
define('_BOUCLE_PROFILER', 5000);

$GLOBALS['z_blocs']=array('head','head_js','nav','content','aside','cron','footer');
define('_URLS_PROPRES_MIN',1);
