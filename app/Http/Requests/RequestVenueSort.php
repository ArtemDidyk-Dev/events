<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\DTO\VenueSortDTO;
use Illuminate\Foundation\Http\FormRequest;

final class RequestVenueSort extends FormRequest
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
            'sortField' => 'string|in:id,name',
            'sortDirection' => 'string|in:asc,desc',
        ];
    }

    public function getDTO(): VenueSortDTO
    {
        return new VenueSortDTO(sortField: $this->input('sortField', 'id'), sortDirection: $this->input(
            'sortDirection',
            'asc'
        ));
    }
}
