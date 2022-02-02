<?php

    try {
        mail("jefferson.chaves@ifpr.edu.br", "teste", "teste");
    } catch (\Throwable $th) {
        echo  "algo não funcionou";
    }
