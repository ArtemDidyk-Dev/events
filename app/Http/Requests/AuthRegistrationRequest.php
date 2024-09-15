<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\DTO\RegistrationDTO;
use Illuminate\Foundation\Http\FormRequest;

final class AuthRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:25|string',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|min:6|string|confirmed',
        ];
    }

    /**
     * Get the DTO for the request.
     */
    public function getDTO(): RegistrationDTO
    {
        return new RegistrationDTO(name: $this->input('name'), email : $this->input('email'), password: $this->input(
            'password'
        ));
    }
}
