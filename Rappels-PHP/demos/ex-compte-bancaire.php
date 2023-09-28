<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Créer une classe Account qui doit respecter les contraintes suivantes
// Définir 4 propriétés :
// - id (de type int)
// - type (de type string)
// - solde (de type double)
// - proprietaire (de type Contact)
// générer les getters / setters sauf setSolde
// ajouter 2 méthodes crediter et debiter pour mettre à jour le solde
// tel que le code suivant fonctionne :

use App\Entity\CompteBancaire;
use App\Entity\CompteType;
use Nord\Entity\Contact;

$contact = new Contact();
$contact->setId(1)->setFirstname('Bill')->setLastname('Gates');

$compte = new CompteBancaire();
$compte->setId(100)->setProprietaire($contact)->setType(CompteType::LIVRET_A);

echo "Solde : " . $compte->getSolde() . "\n"; // Solde : 0

$compte->crediter(4000);

echo "Solde : " . $compte->getSolde() . "\n"; // Solde : 4000

$compte->debiter(500);

echo "Solde : " . $compte->getSolde() . "\n"; // Solde : 3500

// Bonus :
// Interdire les soldes négatifs
// N'autoriser que 3 types de compte (Compte Courant, PEL, Livret A)
