/<?php
function exibeMensagemLancamento (int /*para passar referencia usar &*/$ano): void{
    if ($ano > 2022) {
    echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
    echo "Esse filme ainda é novo\n";
    } else {
    echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $plano, int $ano): bool{
    return $plano || $ano < 2020;
}

function criaFilme(string $nome, int $ano, float $nota, string $genero): Filme{
    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anoLancamento = $ano;
    $filme->genero = $genero;
    $filme->nota = $nota;

    return $filme;
}