# Countdown WordPress plugin

## Project structure
The plugin folder is located in this path
`wordpress/wp-content/plugins/countdown`

The files related to the back-end part are located in the `src` folder and the files related to the front-end are located in the `web` folder.

## Start the project 
```bash
docker-compose up -d --build
```

If you have any permission issues, try executing the command with _sudo_.

## Update the autoloader
Connect to the PHP container and run this command.\
An alias is already created in the Dockerfile to specify the plugin `composer.json` path.\
**Note** : if you use the `docker exec` command, the shell won't be interactive and won't use the alias for _composer_.\
You need to specify the path manually or you need to go into the correct folder.
```bash
composer dumpautoload -o
```

To execute the command in the container from outside you can use :
```bash
docker exec wp-plugin_wordpress_1 composer --working-dir=/var/www/html/wp-content/plugins/countdown/src dumpautoload -o
```

To build and watch the Vue.js files you have to connect the the node container and execute this command in the web directory.

```bash
npm run watch
```

## Access WordPress
`localhost:8000`
