<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportStoreRequest extends FormRequest
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
            'anonymous' => ['nullable'],
            'reporter_name' => ['nullable', 'string', 'max:255'],
            'reporter_email' => ['nullable', 'email', 'max:255'],
            'reporter_phone' => ['nullable', 'string', 'max:20'],
            'victim_name' => ['required', 'string', 'max:255'],
            'victim_age' => ['required', 'integer', 'min:0', 'max:25'],
            'victim_address' => ['required', 'string'],
            'abuse_type' => ['required', 'string', 'max:50'],
            'incident_description' => ['required', 'string'],
            'datetime' => ['nullable'],
            'evidence' => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf,docx', 'max:2048'],
        ];
    }
}
