<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CpfCnpj implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $digits = preg_replace('/\D/', '', (string) $value);

        if (strlen($digits) === 11 && self::isValidCpf($digits)) return;
        if (strlen($digits) === 14 && self::isValidCnpj($digits)) return;

        $fail('CPF/CNPJ inválido.');
    }

    private static function isValidCpf(string $cpf): bool
    {
        if (preg_match('/^(\d)\1{10}$/', $cpf)) return false;

        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ((int)$cpf[$t] !== $d) return false;
        }
        return true;
    }

    private static function isValidCnpj(string $cnpj): bool
    {
        if (preg_match('/^(\d)\1{13}$/', $cnpj)) return false;

        $calc = function (array $weights, string $numbers): int {
            $sum = 0;
            foreach ($weights as $i => $w) {
                $sum += (int)$numbers[$i] * $w;
            }
            $rest = $sum % 11;
            return $rest < 2 ? 0 : 11 - $rest;
        };

        $base = substr($cnpj, 0, 12);
        $d1 = $calc([5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2], $base);
        $d2 = $calc([6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2], $base . $d1);

        return $cnpj[12] == (string)$d1 && $cnpj[13] == (string)$d2;
    }
}
