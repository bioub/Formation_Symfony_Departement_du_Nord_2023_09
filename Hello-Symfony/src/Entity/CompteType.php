<?php

namespace App\Entity;

enum CompteType: string
{
    case COURANT = 'Compte Courant';
    case PEL = 'PEL';
    case LIVRET_A = 'Livret A';
}