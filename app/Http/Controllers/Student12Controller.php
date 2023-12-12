<?php

namespace App\Http\Controllers;

use App\Models\Student12;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Student12Controller extends Controller
{

    public function Index(){
        return view('12student.login');
    }// End Method

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('12student')->attempt(['email' => $check['email'],'password' => $check['password']])){
            $notification = array(
                'message' => 'تم تسجيل الدخول بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->route('12student.dashboard')->with($notification);
        }else{
            $notification = array(
                'message' => 'الايميل او كلمه السر غير صخيخه',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method
    public function Dashboard(){
        return view('12student.dashboard');
    }// End Method

    public function Student12Logout(){
        Auth::guard('12student')->logout();
        $notification = array(
            'message' => 'تم تسجيل الخروج بنجاح',
            'alert-type' => 'error'
        );
        return redirect()->route('12student_form')->with($notification);
    }// End Method

    public function ChangePassword(){
        return view('12student.change_password');
    }// End Method

    public function UpdatePassword(Request $request){
        try{
            $validateData = $request->validate([
                'oldpassword' => 'required',
                'newpassword' => 'required',
                'confirm_password' => 'required|same:newpassword',
            ]);

            $hashedPassword = Auth::guard('12student')->user()->password;
            if (Hash::check($request->oldpassword,$hashedPassword )) {
                $users = Student12::find(Auth::guard('12student')->user()->id);
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
        $id = Auth::guard('12student')->user()->id;
        $userData = Student12::find($id);
        return view('12student.profile',compact('userData'));
    }// End Method

    public function StoreProfile(Request $request){
        try{
            $id = Auth::guard('12student')->user()->id;
            $data = Student12::find($id);
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


    public function All12Students(){
        $students_12 = Student12::latest()->get();
        return view('admin.users.12student',compact('students_12'));
    } // End Method

    public function Add12Student(Request $request){
        try{
            Student12::insert([
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
                'message' => 'تم اضافه حساب طالب 12 بنجاح',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method

    public function Delete12Student($id){
        try{
            Student12::findOrFail($id)->delete();
            $notification = array(
                'message' => 'تم حذف حساب طالب 12 بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    } // End Method
}
