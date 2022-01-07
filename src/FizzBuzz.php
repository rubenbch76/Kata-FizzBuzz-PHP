<?php

/* Etapa 1:
- Devuelve Fizz si el número es divisible por 3.
- Devuelve Buzz si el número es divisible por 5.
- Devuelve FizzBuzz si el número es divisible por 3 y por 5.
- Devuelve el mismo número si no se cumple nada de lo anterior.

Nuevos requerimientos:

Etapa 2

- Devuelve Fizz si el número es divisible por 3 o si contiene un 3. (Ej.: Fizz si el número es 534) 
- Devuelve Buzz si el número es divisible por 5 o si contiene un 5. (Ej.: Buzz si el número es 25).

EL 53. CONTIENE 5 Y 3 Y NO ES DIVISIBLE POR NINGUNO. QUE HAY QUE DEVOLVER, ¿Fizz o Buzz?

*/

namespace App;

class FizzBuzz{

    public function getFizzBuzz($number){

        /* $divByThree = '';
        $divByFive = '';
        $finalResult = ''; */

        if(($number % 3 == 0) && ($number % 5 == 0)){
            return "FizzBuzz";
        }
       
        if(($number % 3 == 0) || (str_contains($number, '3'))){
            return "Fizz";
        }

        if(($number % 5 == 0) || (str_contains($number, '5'))){
            return "Buzz";
        }

        return $number;
        
    }

}



?>