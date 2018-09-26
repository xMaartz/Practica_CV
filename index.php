<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            class joc {
                public $plataforma;
                public $unitats;
                public $preu;
                
                public function _construct($plataforma, $unitats, $preu){
                    $this->plataforma = $plataforma;
                    $this->unitats = $unitats;
                    $this->preu = $preu;
                }
            }
        ?>
    </body>
</html>
