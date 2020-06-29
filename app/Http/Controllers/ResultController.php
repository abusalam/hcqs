<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personal_dtl;

class ResultController extends Controller
{
    public function search_result(Request $request){
       $statuscode=200;
    if (!$request->ajax()) {
        $statusCode = 400;
        $response = array('error' => 'Error occured in form submit.');
        return response()->json($response, $statusCode);
    }
    // $this->validate($request,[
    //     'code'=>"required|integer",
    //     ],
    //     [
    //      'code.required' => 'Code is required',
    //      'code.integer' => 'Chose must be integer',
    //     ]);
    try {
        $result = personal_dtl::join('result_dtl','result_dtl.per_code','personal_dtl.code')->where('personal_dtl.roll_code', '=', $request->roll_code)->where('personal_dtl.roll_no', '=', $request->roll_no)->where('personal_dtl.reg_no', '=', $request->reg_no)->select('personal_dtl.code','personal_dtl.roll_code','personal_dtl.roll_no','personal_dtl.reg_no','personal_dtl.name','personal_dtl.f_name','personal_dtl.m_name','result_dtl.subject','result_dtl.full_mark','result_dtl.pass_mark','result_dtl.theroy','result_dtl.practical','result_dtl.total','result_dtl.mark_word')->get();
         if($result->count() == 0){
            $response = array(
                'status'=>2 //Should be changed #32
            );

         }else{
            $response = array(
                'options' => $result,'status'=>1 //Should be changed #32
            );

         }
            
        }
        catch(\Exception $e){
            $response = array(
                'exception' => true,
                'exception_message' => $e->getMessage(),
            );
            $statuscode=400;
        } finally{
            return response()->json($response, $statuscode);
        }

    }

    public function print_result_details(Request $request){

         $code=$request->code;

        $result = personal_dtl::join('result_dtl','result_dtl.per_code','personal_dtl.code')->where('personal_dtl.code', '=', $code)->select('personal_dtl.code','personal_dtl.roll_code','personal_dtl.roll_no','personal_dtl.reg_no','personal_dtl.name','personal_dtl.f_name','personal_dtl.m_name','result_dtl.subject','result_dtl.full_mark','result_dtl.pass_mark','result_dtl.theroy','result_dtl.practical','result_dtl.total','result_dtl.mark_word')->get();

                return view('print_result_details')->with('print_result_data',$result);


    }
}
