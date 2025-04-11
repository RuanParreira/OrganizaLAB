<?php
function validarCPF($cpf)
{
    // Remove caracteres não numéricos
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Verifica se o CPF tem 11 dígitos ou é uma sequência repetida
    if (strlen($cpf) !== 11 || preg_match('/^(\d)\1+$/', $cpf)) {
        return false;
    }

    // Validação do primeiro dígito verificador
    for ($t = 9; $t < 11; $t++) {
        $soma = 0;
        for ($i = 0; $i < $t; $i++) {
            $soma += $cpf[$i] * (($t + 1) - $i);
        }
        $resto = ($soma * 10) % 11;
        if ($resto == 10 || $resto == 11) {
            $resto = 0;
        }
        if ($resto != $cpf[$t]) {
            return false;
        }
    }

    return true;
}
