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
    public function passes($attribute, $value): bool
    {
        $firstMatrix = [];
        if(request()->has('first_matrix')) {
            $firstMatrix = request()->get('first_matrix');
        }
        $firstMatrixCols = count($firstMatrix[0]);
        $secondMatrixRows = count($value);
//        $firstMatrixCols = $this->countMatrixCols($firstMatrix);
//        $secondMatrixRows = $this->countMatrixRows($value);
        return $firstMatrixCols === $secondMatrixRows ;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Matrices are not equal and can\'t be multiplied.';
    }

    /**
     * @param array $matrix
     * @return int
     */
    private function countMatrixRows(array $matrix) : int
    {
        return count( array ($matrix));
    }

    /**
     * @param array $matrix
     * @return int
     */
    private function countMatrixCols( array $matrix) : int
    {
       return  (isset($matrix[0])) ?  count(array ($matrix[0])) :  0;
    }
}
