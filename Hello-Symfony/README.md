# Exercices

## Router

* créer un contrôleur `ContactController` avec la commande `make:controller`
* dans ce controller créer 5 méthodes : `index`, `create`, `show`, `delete`, `update`
* créer les fichiers twig manquants (juste mettre une balise h2 avec le nom de la page)
* ces méthodes doivent être accessibles via les requêtes suivantes

| Requete                                 | methode php |
|-----------------------------------------|-------------|
| `GET` `/contacts`                       | `index`     |
| `GET` `/contacts/{id}`                  | `show`      |
| `GET` et `POST` `/contacts/add`         | `create`    |
| `GET` et `POST` `/contacts/{id}/delete` | `delete`    |
| `GET` et `POST` `/contacts/{id}/update` | `update`    |