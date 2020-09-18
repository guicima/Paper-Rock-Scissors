<?php
function computerChoice(): string {
    $number = random_int(1, 3);
    if ($number === 1) {
        return 'Pierre';
    } elseif ($number === 2) {
        return 'Papier';
    } else {
        return 'Ciseaux';
    }
}

function comparateur(string $choix1, string $choix2): string {
    if ($choix1 === 'Pierre' && $choix2 === 'Papier' || $choix1 === 'Papier' && $choix2 === 'Ciseaux' || $choix1 === 'Ciseaux' && $choix2 === 'Pierre') {
        return 'Vous avez perdu';
    }   elseif ($choix2 === 'Pierre' && $choix1 === 'Papier' || $choix2 === 'Papier' && $choix1 === 'Ciseaux' || $choix2 === 'Ciseaux' && $choix1 === 'Pierre') {
        return 'Vous avez gagné';
    } else {
        return 'Egalité';
    }
}





?>