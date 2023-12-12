<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use App\Models\Universty;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specilizations = Specialization::latest()->get();
        $universities = Universty::all();
        return view('admin.specilizations.specilizations',compact('specilizations','universities'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            Specialization::insert([
                'name' => $request->name,
                'universty_id' => $request->universty_id,
                'percentage' => $request->percentage,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم اضافه التخصص بنجاح',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $specilization_id = $request->id;
            Specialization::findOrFail($specilization_id)->update([
                'name' => $request->name,
                'universty_id' => $request->universty_id,
                'percentage' => $request->percentage,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم تحديث التخصص بنجاح',
                'alert-type' => 'info'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $Specialization = Specialization::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'تم حذف التخصص بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function AllSpecilazation()
    {
        $specilizations = Specialization::latest()->get();
        return view('12student.specilizations.specilizations',compact('specilizations'));
    }


}
