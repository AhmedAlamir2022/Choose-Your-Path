<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Note11;
use App\Models\Note12;
use App\Models\Student11;
use App\Models\Student12;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function MyStudent11Notes (){
        $notes = Note11::all();
        $admins = Admin::all();
        return view('11student.notes.mynotes',compact('notes','admins'));

    }

    public function AddNote11(Request $request){
        try {
            Note11::insert([
                'student11_id' => Auth::guard('11student')->user()->id,
                'admin_id' => $request->admin_id,
                'note' => $request->note,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم ارسال الملاحظه بنجاح',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method

    public function DeleteNote11($id){
        try {
            Note11::findOrFail($id)->delete();
            $notification = array(
                'message' => 'تم حذف الملاحظه بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method

    public function Student11Notes (){
        $notes = Note11::all();
        $students11 = Student11::all();
        return view('admin.notes.student11_notes',compact('notes','students11'));
    }

    public function EditStudent11(Request $request){
        $note_id = $request->id;
        Note11::findOrFail($note_id)->update([
            'admin_replay' => $request->admin_replay,
        ]);
        $notification = array(
            'message' => 'تم ارسال الرد بنجاح',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }//End Method

    public function Student12Notes (){
        $notes = Note12::all();
        $students12 = Student12::all();
        return view('admin.notes.student12_notes',compact('notes','students12'));
    }

    public function EditStudent12(Request $request){
        $note_id = $request->id;
        Note12::findOrFail($note_id)->update([
            'admin_replay' => $request->admin_replay,
        ]);
        $notification = array(
            'message' => 'تم ارسال الرد بنجاح',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }//End Method


    public function MyStudent12Notes (){
        $notes = Note12::all();
        $admins = Admin::all();
        return view('12student.notes.mynotes',compact('notes','admins'));

    }

    public function AddNote12(Request $request){
        try {
            Note12::insert([
                'student12_id' => Auth::guard('12student')->user()->id,
                'admin_id' => $request->admin_id,
                'note' => $request->note,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم ارسال الملاحظه بنجاح',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method

    public function DeleteNote12($id){
        try {
            Note12::findOrFail($id)->delete();
            $notification = array(
                'message' => 'تم حذف الملاحظه بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method
}
