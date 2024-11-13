<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluacioneRequest extends FormRequest
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
			'evaluaciones_id' => 'required',
			'empleado_id' => 'required',
			'fecha_evaluacion' => 'required',
			'puntaje' => 'required',
			'observaciones' => 'required|string',
        ];
    }
}
