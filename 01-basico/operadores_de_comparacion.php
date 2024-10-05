<?php
/**
 * ----Ejemplo                    Simbolo                    Resultado
 *     1 == "1"                   == (igual)                 TRUE
 *     10 == "10"                 === (identico)             FALSE
 *     7 != 7                     != (Diferente)             False
 *     21 <> '21'                 <> (Diferente)             False
 *     19 !== 21                  !== (No identico)          True
 *     7 < 4                      < (Menor que)              False
 *     7 > 4                      > (Mayor que)              True
 *     2 <= 2                     <= (Menor o igual que)     TRUE
 *     3 >= 7                     >= (Mayor o igual que)     False
 */
var_dump(2 == "2");
echo "<br>";
var_dump(2 === "2");