# sample-blog

## Introduction
This is a simple sample blog app set up mainly with PHP backend and React front end. Main tech stack:

### Backend
- PHP 7.1
- Symfony 3.4
- MySQL
- Doctrine
- GraphQL Server: youshido/graphql-bundle

### Front end
- React
- GraphQL Client: Apollo
- Material UI
- Styled components

### Others
- Webpack
- Docker

## How to start
To start, from root folder, run docker compose to set up all dockers:

```docker-compose up```

Set up database environment:

```cp .env.dist .env```

Create dummy data by going into php container and running migration/fixture commands

```
docker exec -it sample-blog_php_1 bash
php bin/console doctrine:migration:diff
php bin/console doctrine:migration:migrate
php bin/console doctrine:fixtures:load
```

Go to ```localhost``` to start exploring! Enjoy!

## TODO
- Authentication/authorisation
- Write function in client to handle router URL params (e.g convert `:id` to a specific id of a blog - check in routes.js)
- implement 404 for when cannot find blog by id - client
- implement 404 for when cannot find blog by id - server
- Write tests
- Remove unused package.json packages