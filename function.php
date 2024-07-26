<?php

 function createPassword($number_user, $numb, $car, $simb)
    {
        global $repeat;
        var_dump($repeat);
        var_dump($car);
        var_dump($numb);
        var_dump($simb);

        
        $tutti_i_caratteri = [];
        // Array con tutte le lettere maiuscole
        $maiuscole = range('A', 'Z');

        // Array con tutte le lettere minuscole
        $minuscole = range('a', 'z');

        // Array combinato con tutte le lettere
        $tutte_le_lettere = array_merge($maiuscole, $minuscole);

        // Array con numeri da 0 9
        $numeri = range(0, 9);

        // Converte una Stringa in Array con tutti i simboli
        $simboli = str_split('!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~');

        if ($numb) {
            $tutti_i_caratteri = array_merge($tutti_i_caratteri, $numeri);
        }
        if ($car) {
            $tutti_i_caratteri = array_merge($tutti_i_caratteri, $tutte_le_lettere);
        }
        if ($simb) {
            $tutti_i_caratteri = array_merge($tutti_i_caratteri, $simboli);
        }
        if (!$numb && !$car && !$simb) {
            $tutti_i_caratteri = array_merge($tutte_le_lettere, $numeri, $simboli);
        }
        if ($number_user > count($tutti_i_caratteri) - 1 && $repeat === true) {
            $number_user = count($tutti_i_caratteri) - 1;
        }
         var_dump($tutti_i_caratteri);
        $new_password = '';

        while (strlen($new_password) < $number_user) {
            $rand = rand(0, count($tutti_i_caratteri) - 1);
            $element = $tutti_i_caratteri[$rand];
            if ($repeat === true) {
                if (strpos($new_password,$element) === false) {
                    $new_password .= $element;
                }

            } else {
                $new_password .= $element;
            }

        }
        return $new_password;

    }
   