<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\DTO\EventDTO;
use Illuminate\Foundation\Http\FormRequest;

final class EventRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|min:6|max:255',
            'data_event' => 'required|date',
            'venue' => 'exists:App\Models\Venue,id|required',
        ];

        if ($this->isMethod('post')) {
            $rules['poster'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        } elseif ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['poster'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        return $rules;
    }

    public function getDTO(): EventDTO
    {
        return new EventDTO(
            name: $this->input('name'),
            poster: $this->file('poster'),
            dataEvent: $this->input('data_event'),
            venueId: (int) $this->input('venue')
        );
    }
}
