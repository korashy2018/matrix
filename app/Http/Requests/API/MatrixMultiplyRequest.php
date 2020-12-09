<?php

namespace App\Http\Requests\API;

use App\Rules\API\MatrixValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MatrixMultiplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $matrixEqualityRule = new MatrixValidationRule();
        return [
            'first_matrix' => ['array','required'],
            'second_matrix' => ['array','required',$matrixEqualityRule]
        ];
    }
}
