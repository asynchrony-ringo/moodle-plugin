<?php

function xmldb_local_spark_uninstall() {
    global $DB, $CFG;
    $dbman = $DB->get_manager();
    $plugindirs = glob($CFG->dirroot.'/local/local_spark/plugins/*', GLOB_ONLYDIR);
    foreach ($plugindirs as $plugindir) {
        $dbman->delete_tables_from_xmldb_file($plugindir.'/db/install.xml');
        $pluginname = 'local_spark_'.end(explode('/', $plugindir));
        if($cfg = (array)get_config($pluginname)) {
            foreach($cfg as $name => $value) {
                unset_config($name, $pluginname);
            }
        }
    }
    return true;
}
