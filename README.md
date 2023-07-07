# Blog

<h1>Installation du projet</h1>

- Disposer de 'composer' en globale sur son envirronement de travail

- Récuperer les dépendances via 'composer install'

- Version de PHP 8.1

- Version Symfony LTS ^5.4

<h1>Commande d'execution du projet </h1>

- composer create-project symfony/website-skeleton firstProject "5.4.*"

- création .env.local 

- création .php-version // 8.1

- symfony console make:entity

- symfony console make:user

- symfony console doctrine:database:create -- création database

- symfony console make:migration

- symfony console doctrine:migration:migrate

- symfony make:controller HomeController // dans le fichier path: '/', name: 'app_home', methods: 'GET'

- composer require annotations // pour init les paths

- symfony console debug:router // verifier le path si il existe

- composer require symfony/security-bundle

- symfony serve