<?php

function categoria($input)
{
    switch ($input) {
        case 'noticias':
            echo "Notícias";
            break;
        case 'outros':
            echo "Outros";
            break;
        case 'dicas':
            echo "Dicas e Novidades";
            break;
        case 'procedimentos':
            echo "Procedimentos";
            break;
    }

}