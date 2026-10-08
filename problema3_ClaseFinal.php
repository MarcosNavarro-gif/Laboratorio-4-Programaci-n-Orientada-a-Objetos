<?php

final class Coche{
    public function getColor()
    {
        echo "Rojo";
    }
}


Class cocheDeLujo extends Coche {
    //Error Fatal, Clase no heredada.
}

?>