<?php

namespace App\Tools;


//classe outils static car on a pas besoin d'instancier, on appel juste les fonctions
class StringTools
{
    public static function toCamelCase($value, $pascalCase = false) 
    {
        $value = ucwords(str_replace(array('-', '_'), ' ', $value));
        $value = str_replace(' ', '', $value);

        if ($pascalCase === false) {
            return lcfirst($value);
        } else {
            return $value;
        }
    }

    public static function toPascalCase($value) 
    {
        return self::toCamelCase($value, true);
    }
}