<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\MatrixMultiplyRequest;

class MatrixOperationController extends Controller
{
    /**
     *This is the function that will handle multiplication of two matrices
     * @param MatrixMultiplyRequest $request
     * @return array
     */
    public function multiply(MatrixMultiplyRequest $request) : array{
        return $request->all();
    }
}
