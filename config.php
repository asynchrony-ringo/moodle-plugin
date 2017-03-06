<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = $_ENV['POSTGRES_HOST'];
$CFG->dbname    = $_ENV['POSTGRES_NAME'];
$CFG->dbuser    = $_ENV['POSTGRES_USERNAME'];
$CFG->dbpass    = $_ENV['POSTGRES_PASSWORD'];
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost:3002';
$CFG->dataroot  = $_ENV['DATA_FOLDER'];
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');
