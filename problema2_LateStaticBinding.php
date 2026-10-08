<?php
// ===== Ejemplo Late Static Binding: static:: vs self:: =====
Class A{
    public static function miFuncion(){
        //Mostrará el nombre de la clase actual::
        echo __CLASS__;
    }
    // Versión con static::
    public static function otraFuncion(){
        static::miFuncion();
    }
    // Versión con self::
    public static function otraFuncionSelf(){
        self::miFuncion();
    }
}//fin de A

Class B extends A {
    public static function miFuncion(){
        //Mostrará el nombre de clase actual::
        echo __CLASS__;
    }
}

echo "Con static:: -> ";
B::otraFuncion();       // Resultado: B
echo "<br>";

echo "Con self:: -> ";
B::otraFuncionSelf();   // Resultado: A
echo "<br>";

/*
 * Revisión de resultados:
 * - Con static:: -> B : se resuelve en tiempo de ejecución a la clase desde donde se llamó (B).
 * - Con self::   -> A : queda fijo a la clase donde se escribió el método (A), aunque B lo sobrescriba.
 */
