<?php

    switch($tipo){ 
                case "string":
                    echo CHTML::dibujaEtiqueta("p",[],"El tipo string: ".$valor);
                    echo "<br>";
                break;

                case "double":
                    echo CHTML::dibujaEtiqueta("p",[],"El tipo double: ".$valor." al cuadrado es: ".($valor*2));
                    echo "<br>";
                break;
                
                case "boolean":
                        echo CHTML::dibujaEtiqueta("p",[],(int)$valor." ,Opuesto ".!$valor);
                        echo "<br>";
                    break;
                
                case "array":
                        foreach($valor as $keys => $value){
                            echo CHTML::dibujaEtiqueta("p",[],"Posicion del 2 array: ".$keys." contenido: ".$value);
                            echo "<br>";
                        }
                    break;
                
                case "integer":
                        echo CHTML::dibujaEtiqueta("p",[],"Valor ".$valor." en binario ".decbin($valor));
                        echo "<br>";
                    break;
                
            }

    
