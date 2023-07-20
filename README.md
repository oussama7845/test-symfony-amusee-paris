# test-symfony-amusee-paris

## Installation du projet

1. Cloner le projet depuis le dépôt Git.
2. Depuis la **racine du projet**, adapter les paramètres de votre serveur SQL sur le fichier `.env`.  
3. Lancer la commande `composer install`.
4. Lancer la commande `php bin/console doctrine:database:create` pour créer la base de données.
5. Lancer la commande `php bin/console doctrine:database:create` pour créer la base de données.
6. Lancer la commande `php bin/console doctrine:migrations:migrate` ou `php bin/console d:m:m` pour mettre à jour le schéma de base de données (optionnel si import du fichier database.sql).
7. Lancer le projet avec la commande `symfony server:start`.
8. Vous pouvez accéder au projet via le lien `http://127.0.0.1:8000`.
9. Si vous avez pas importé la base de données, vous pouvez ajouter des images en cliquant sur la bouton **Ajouter une image** en bas de la page ou via le lien suivant `http://127.0.0.1:8000/image/new`.
