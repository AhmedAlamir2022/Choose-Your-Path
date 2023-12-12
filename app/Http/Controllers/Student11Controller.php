<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Student11;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Student11Controller extends Controller
{

    public function Index(){
        return view('11student.login');
    }// End Method

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('11student')->attempt(['email' => $check['email'],'password' => $check['password']])){
            $notification = array(
                'message' => 'تم تسجيل الدخول بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->route('11student.dashboard')->with($notification);
        }else{
            $notification = array(
                'message' => 'الايميل او كلمه السر غير صخيخه',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method

    public function Dashboard(){
        return view('11student.dashboard');
    }// End Method

    public function Student11Logout(){
        Auth::guard('11student')->logout();
        $notification = array(
            'message' => 'تم تسجيل الخروج بنجاح',
            'alert-type' => 'error'
        );
        return redirect()->route('11student_form')->with($notification);
    }// End Method

    public function ChangePassword(){
        return view('11student.change_password');
    }// End Method

    public function UpdatePassword(Request $request){
        try{
            $validateData = $request->validate([
                'oldpassword' => 'required',
                'newpassword' => 'required',
                'confirm_password' => 'required|same:newpassword',
            ]);

            $hashedPassword = Auth::guard('11student')->user()->password;
            if (Hash::check($request->oldpassword,$hashedPassword )) {
                $users = Student11::find(Auth::guard('11student')->user()->id);
                $users->password = bcrypt($request->newpassword);
                $users->save();

                $notification = array(
                    'message' => 'تم تحديث كلمه السر بنجاح',
                    'alert-type' => 'info'
                );
                return back()->with($notification);
            } else{

                $notification = array(
                    'message' => 'كلمه السر الحاليه ليست صحيحه',
                    'alert-type' => 'error'
                );
                return back()->with($notification);
            }
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method

    public function Profile(){
        $id = Auth::guard('11student')->user()->id;
        $userData = Student11::find($id);
        return view('11student.profile',compact('userData'));
    }// End Method
    public function StoreProfile(Request $request){
        try{
            $id = Auth::guard('11student')->user()->id;
            $data = Student11::find($id);
            $data->name = $request->name;
            $data->contact = $request->contact;
            $data->address = $request->address;
            $data->country = $request->country;
            $data->city	 = $request->city	;
            $data->save();
            $notification = array(
                'message' => 'تم تعديل البيانات الشخصيه بنجاح',
                'alert-type' => 'info'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method


    public function All11Students(){
        $students_11 = Student11::latest()->get();
        return view('admin.users.11student',compact('students_11'));
    } // End Method

    public function Add11Student(Request $request){
        try{
            Student11::insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'contact' => $request->contact,
                'address' => $request->address,
                'country' => $request->country,
                'city' => $request->city,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم اضافه حساب طالب 11 بنجاح',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method

    public function Delete11Student($id){
        try{
            Student11::findOrFail($id)->delete();
            $notification = array(
                'message' => 'تم حذف حساب طالب 11 بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    } // End Method

    public function AllExams ()
    {
        $exams = Exam::all();
        return view('11student.exams.exams',compact('exams'));
    }

    public function StudentExam($exam_id){
        $student_id = Auth::guard('11student')->user()->id;
        return view('11student.exams.show',compact('exam_id','student_id'));

    } // End Method
}
