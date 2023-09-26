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

## Twig

Reprendre la classe `Contact` et la déposer dans le répertoire `src/Entity` (attention à corriger le namespace pour l'autoloading).
Dans le controller `list` de `ContactController` créer un tableau de contacts (au moins 2) et le passer au template `contact/list.html.twig`
Dans ce template, afficher les contacts sous forme de balise table (3 colonnes id, firstname, lastname).

Ajouter une 4e colonne `Actions` avec un lien `Afficher` sur chaque ligne qui renvoie vers la page `GET /contacts/{id}`

Dans le controller `show` de `ContactController`, créer un objet `Contact` le passer au template et l'afficher avec la mise en forme de votre choix.
