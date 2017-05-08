# Moodle Spark integration

spark_local is a local plugin for Moodle designed to integrate Spark to the LMS.

## App Installation

In order to get your local Moodle instance running, you will need to run the `docker-compose up` command in the terminal from within the root directory of the project. After doing so, you can navigate to the instance via `http://localhost:3002`. Upon page load, the application will guide you through a set of prompts and instructions to complete the installation. Once up and running, you will be able to use Moodle's functionality and install new plugins.

## Plugin Installation

To install your local Moodle plugin initially, you will need to zip up all of the content within spark_local to a file and manually install it through Moodle's interface. Moodle has a very particular process / set of commands that it runs when installing and uninstalling local plugins, and this step is required in order for Moodle to be compatible with your plugin. Once installed, spin down the Docker container and uncomment the following line from the Docker-compose file: ` - ./spark_local:/var/www/html/local/spark`. Save the file, and spin up the Docker container once again. Now Moodle will update your plugin based on all of your local code. NOTE: Since the spark_local directory is now bound within the Docker container - if you uninstall the plugin through Moodle's interface, it will delete all of your local files as well. If you wish to uninstall your plugin through the interface, you must first spin down the Docker container, unbind the `spark_local` directory, and spin the container back up before doing so.
