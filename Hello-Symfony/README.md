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

## Doctrine

Supprimer la classe `Contact`

Avec la commande `make:entity`, regénérer la classe `Contact` avec les 4 propriétés suivantes (en plus de l'id) :

- `firstname`
- `lastname`
- `email` (optionnel)
- `phone` (optionnel)

Les 4 sont de type string (taille au choix)

Générer la méthode `setId` via PHPStorm

Lancer la commande pour updater la table

Compléter `AppFixtures` pour y générer 5 contacts.

Lancer la commande pour insérer les fixtures

Compléter les méthodes `index` et `show` de `ContactController` pour afficher les contacts (la liste et le détail)

## Associations

Avec la commande `make:entity`, générer une classe `Tag` avec 1 propriété (en plus id généré automatiquement) :

- `name` (type `string`)

Mettre à jour l'entité `Contact` avec `make:entity`, y ajouter la propriété :

- `tags` (type `ManyToMany` vers l'entité `Tag`)

Compléter `AppFixtures` pour y générer 2 tags `Amis`, `Collègues`.

Associer ces tags aux contacts existants.

Lancer la commande pour insérer les fixtures.

Mettre à jour le templates `contact/show.html.twig` pour afficher les tags

## Validation et Formulaire

Ajouter l'attribut de validation dans `Company` pour vérifier que le nom d'une ville soit supérieur ou égal à 2 caractères.

Générer le type de formulaire `CompanyType` et créer la route `/company/create` dans `CompanyController` pour insérer des nouvelles sociétés.