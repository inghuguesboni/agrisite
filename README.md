## Configuration du projet

Insttaller toutes les dépendances du projet
```
composer install
```

copier le fichier .env.example dans .env

## Configuration de la base de donnée
Créer une base de donnée et ajouter les configuration adéquates dans le fichier .env

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

## Créer un utilisateur admin
Exécuter la commande suivant pour créer un utilisateur admin
```
php artisan voyager:admin your@email.com --create
```