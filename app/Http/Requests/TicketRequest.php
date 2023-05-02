<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TicketRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'type_id' => ['required', Rule::exists('types', 'id')],
            'priority_id' => ['required', Rule::exists('priorities', 'id')],
            'project_id' => ['required'],
            'title' => 'required',
            'description' => 'required',
            'context' => 'required',
            'browser' => 'required',
            'os' => 'required',
            'url' => 'url|required'
        ];
    }
}
