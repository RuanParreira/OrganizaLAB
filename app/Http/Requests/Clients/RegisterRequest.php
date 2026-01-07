<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\CpfCnpj;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'cpf_cnpj' => $this->filled('cpf_cnpj')
                ? preg_replace('/\D/', '', (string) $this->cpf_cnpj)
                : null,
            'number' => preg_replace('/\D/', '', (string) $this->number),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'cpf_cnpj' => [
                'nullable',
                new CpfCnpj,
                Rule::unique('clients', 'cpf_cnpj')
                    ->where(function ($query) {
                        return $query->where('user_id', $this->user()->id);
                    }),
                'max:14'
            ],
            'number' => 'required|string|max:11',
        ];
    }
}
