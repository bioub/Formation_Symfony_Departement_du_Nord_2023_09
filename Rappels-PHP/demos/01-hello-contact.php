<?php

// Nom complet de la classe (avec ses namespace en préfixe) :
// Fully Qualified Class Name (FQN ou FQCN)
use Nord\Entity\Contact;

// require_once __DIR__ . '/../src/Entity/Contact.php';
require_once __DIR__ . '/../vendor/autoload.php';

$romain = new Contact();
$romain->setId(1)->setFirstname('Romain')->setLastname('Bohdanowicz');

echo "Prénom : " . $romain->getFirstname() . "\n";
