<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\DTO\VenueDTO;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

final class VenueRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'slug' => 'nullable|min:3|max:255',
        ];
    }

    public function getDTO(): VenueDTO
    {
        $name = $this->input('name');
        $slug = $this->input('slug') ?? Str::slug($name);
        return new VenueDTO(name: $name, slug: $slug);
    }
}
