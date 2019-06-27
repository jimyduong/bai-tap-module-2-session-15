<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showIndex(){
        return view('index');
    }
    public function calculator(Request $request){

        $firstNumber=$request->firstNumber;
        $secondNumber=$request->secondNumber;
        $operator=$request->operator;
        $result='';
        if($operator=="+"){
            $result=$firstNumber+$secondNumber;
        }
        if($operator=="-"){
            $result=$firstNumber-$secondNumber;
        }
        if($operator=="x"){
            $result=$firstNumber*$secondNumber;
        }
        if($operator=="/"){
            if($secondNumber==0){
                $result='khong chia dc cho so 0';
            }else{
                $result=$firstNumber/$secondNumber;
            }

        }

        return view('index',compact('result'));
    }
}

