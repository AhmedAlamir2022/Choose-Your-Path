<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.login');
    }// End Method

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'],'password' => $check['password']])){
            $notification = array(
                'message' => 'تم تسجيل الدخول بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->route('admin.dashboard')->with($notification);
        }else{
            $notification = array(
                'message' => 'الايميل او كلمه السر غير صخيخه',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method

    public function Dashboard(){
        return view('admin.dashboard');
    }// End Method

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        $notification = array(
            'message' => 'تم تسجيل الخروج بنجاح',
            'alert-type' => 'error'
        );
        return redirect()->route('admin_form')->with($notification);
    }// End Method

    public function Profile(){
        $id = Auth::guard('admin')->user()->id;
        $userData = Admin::find($id);
        return view('admin.profile',compact('userData'));
    }// End Method

    public function StoreProfile(Request $request){
        try{
            $id = Auth::guard('admin')->user()->id;
            $data = Admin::find($id);
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

    public function ChangePassword(){
        return view('admin.change_password');
    }// End Method

    public function UpdatePassword(Request $request){
        try{
            $validateData = $request->validate([
                'oldpassword' => 'required',
                'newpassword' => 'required',
                'confirm_password' => 'required|same:newpassword',
            ]);

            $hashedPassword = Auth::guard('admin')->user()->password;
            if (Hash::check($request->oldpassword,$hashedPassword )) {
                $users = Admin::find(Auth::guard('admin')->user()->id);
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

    public function AllAdmins(){
        $admins = Admin::latest()->get();
        return view('admin.users.admins',compact('admins'));
    } // End Method

    public function AddAdmin(Request $request){
        try{
            Admin::insert([
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
                'message' => 'تم اضافه حساب الادمن بنجاح',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method

    public function DeleteAdmin($id){
        try{
            Admin::findOrFail($id)->delete();
            $notification = array(
                'message' => 'تم حذف حساب الادمن بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    } // End Method
}
