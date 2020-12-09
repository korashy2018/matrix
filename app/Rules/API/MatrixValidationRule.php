<?php

namespace App\Rules\API;

use http\Client\Response;
use Illuminate\Contracts\Validation\Rule;

class MatrixValidationRule implements Rule
{
    private $error = '';
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(request()->has('first_matrix')) {
            $firstMatrix = request()->get('first_matrix');
        }
        $firstMatrixCols = $this->countMatrixCols($firstMatrix);
        $secondMatrixRows = $this->countMatrixRows($value);

        return $firstMatrixCols === $secondMatrixRows ;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Matrices are not equal and can\'t be multiplied.';
    }

    /**
     * @param $matrix
     * @return int
     */
    private function countMatrixRows($matrix) : int
    {
        return count($matrix);
    }

    /**
     * @param $matrix
     * @return int
     */
    private function countMatrixCols($matrix) : int
    {
        return $cols = count($matrix[0]);
    }
}
