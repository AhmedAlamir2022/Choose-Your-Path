<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::all();
        return view('admin.exams.exams',compact('exams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            Exam::insert([
                'name' => $request->name,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم اضافه الاختبار بنجاح',
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
            $exam_id = $request->id;
            Exam::findOrFail($exam_id)->update([
                'name' => $request->name,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم تحديث الاختبار بنجاح',
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
            $exam = Exam::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'تم حذف الاختبار بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
