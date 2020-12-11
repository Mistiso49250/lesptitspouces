<?php
declare(strict_types=1);

namespace Oc\Tools;

class Fonction
{
    // génère une clef de 60 charactères
    public function str_random($length)
    {
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return mb_substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }

    
}
