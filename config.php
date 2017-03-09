<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('POSTGRES_HOST');
$CFG->dbname    = getenv('POSTGRES_DB');
$CFG->dbuser    = getenv('POSTGRES_USER');
$CFG->dbpass    = getenv('POSTGRES_PASSWORD');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost:3002';
$CFG->dataroot  = getenv('DATA_FOLDER');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');
