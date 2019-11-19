<?php

function exibeMensagem(array $mensagens)
{
    echo "Cursos alura: <br>";

    foreach ($mensagens as $mensagem) {

        echo " - " .$mensagem . "<br>";
    }

    echo "---------------------------------------------------------------------- <br>";
}