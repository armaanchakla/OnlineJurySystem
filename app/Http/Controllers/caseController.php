<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\caseSubmit;
use DB;

class caseController extends Controller
{
    public function caseSubmit(){
    	return view('frontView.case.caseSubmit');
    }

    public function caseSave(Request $request){
    	// dd($request->all());
    	$caseSubmit = new caseSubmit;

    	$caseSubmit->caseName = $request -> caseName;
    	$caseSubmit->caseDescription = $request -> caseDescription;
    	$caseSubmit->caseStatus = $request -> caseStatus;

    	$caseSubmit->save();

    	return redirect('/case/submit')->with('caseSubmitMessage','Data Inserted Successfully!');
    }

    public function caseShow(){
        //$caseShow = caseSubmit::all();

        $caseShow = DB::table('case_submits')->paginate(5);
        

        return view('frontView.case.caseShow',['caseShowData' => $caseShow]);
    }

    public function caseEdit($id){
        //echo $id;
        $caseEdit = caseSubmit::where('id',$id)->first();

        return view('frontView.case.caseEdit',['caseEditData' => $caseEdit]);
    }

    public function caseUpdate(Request $request){
        //dd($request->all());

        $caseUpdate = caseSubmit::find($request -> caseId);
        $caseUpdate->caseName = $request -> caseName;
        $caseUpdate->caseDescription = $request -> caseDescription;
        $caseUpdate->caseStatus = $request -> caseStatus;

        $caseUpdate -> save();

        return redirect('/case/show')->with('caseUpdateMessage', 'Data Updated Successfully.');
    }

    public function caseDelete($id){
        //echo $id;
        $caseDelete = caseSubmit::find($id);
        $caseDelete -> delete();

        return redirect('/case/show')->with('caseDeleteMessage', 'Case Deleted Successfully.');
    }
}
