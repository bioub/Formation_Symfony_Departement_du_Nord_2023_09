<?php

namespace Nord\Entity;

enum CompteType: string
{
    case COURANT = 'Compte Courant';
    case PEL = 'PEL';
    case LIVRET_A = 'Livret A';
}