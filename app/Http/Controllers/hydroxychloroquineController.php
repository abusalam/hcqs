<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_hydroxychloroquine;

class hydroxychloroquineController extends Controller
{
    public function page($code){
        return view('test')->with('code',$code);

    }

    public function submit_yes_no(Request $request){

        
       $statusCode = 200;
              if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
       $response=array();
       
       $this->validate($request, [
            //'mobile_no' => 'required|digits:10',
            'code' => 'required',
            'radioValue' => 'required',
                ], [        
            'code.required' => 'Unique Code is required',
           //'mobile_no.required' => 'Mobile Number is required',
            //'mobile_no.digits' => 'Mobile Number should be 10 Digits',
            'radioValue.required' => 'Hydroxychloroquine Yes or no is required ',
            
        ]); 

        
        try{
        $radioValue = $request->radioValue;
        $code = $request->code;
       // $mobile_no = $request->mobile_no;

        $result=tbl_hydroxychloroquine::where('unique_code',$code)->update(['yes_no'=>$radioValue]);

        if($result > 0){
            $response=array('status'=>1);
        }else{
             $response=array('status'=>0);
        }

     
      
       } catch (\Exception $e) {
            $response = array(
                'exception' => true,
                'exception_message' => $e->getMessage(),
            );
            $statusCode = 400;
        } finally {
           return  response()->json($response,$statusCode);
        } 



    }

    public function check_unique_code(Request $request){

         $statusCode = 200;
              if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
       $response=array();
       
       $this->validate($request, [
           
            'code' => 'required',
                ], [        
            'code.required' => 'Something going wrong', 
        ]); 

        
        try{
       
        $code = $request->code;
     
        $result=tbl_hydroxychloroquine::where('unique_code',$code)->count();

        if($result > 0){
            $response=array('status'=>1);
        }else{
             $response=array('status'=>0);
        }

     
      
       } catch (\Exception $e) {
            $response = array(
                'exception' => true,
                'exception_message' => $e->getMessage(),
            );
            $statusCode = 400;
        } finally {
           return  response()->json($response,$statusCode);
        } 


    }
}
