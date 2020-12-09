<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\MatrixMultiplyRequest;
use App\Matrices\NumberTOExcelColumnsConverter;
use App\Matrices\Operations\Multiply;

class MatrixOperationController extends Controller
{
    /**
     *This is the function that will handle multiplication of two matrices
     * @param MatrixMultiplyRequest $request
     * @return array
     */
    public function multiply(MatrixMultiplyRequest $request) : array{
        $resultMatrixBeforeConverting = Multiply::handle($request->first_matrix,$request->second_matrix);
         foreach($resultMatrixBeforeConverting as $sub){
               $ExcelAlike[][] =  array_map(function ($number){
                        return NumberTOExcelColumnsConverter::convert($number);
                    },$sub);
       }

        return $ExcelAlike;
    }
}
