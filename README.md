# Countdown WordPress plugin

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

To build and watch the Vue.js files you have to connect the the node container and execute this command in the web directory.

```bash
npm run watch
```

## Access WordPress
`localhost:8000`
