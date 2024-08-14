<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|string',
            'event_details' => 'required|string',
            'date'=> 'required|date',
            'location'=> 'required|string',
            'event_mission' => 'required|string',
            'mission_bullets' => 'required|array',
            'status' => 'required|string',
            'tags' => 'required|array', 
        ];
    }
}
