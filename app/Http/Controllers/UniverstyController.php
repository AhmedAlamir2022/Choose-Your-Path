<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use App\Models\Universty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class UniverstyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universties = Universty::all();
        return view('admin.universtey.universties',compact('universties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.universtey.add_universtey');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $image1 = $request->file('image1');
            $name_gen1 = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image1)->resize(430,327)->save('upload/universties/'.$name_gen1);
            $save_url1 = 'upload/universties/'.$name_gen1;

            $image2 = $request->file('image2');
            $name_gen2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image2)->resize(430,327)->save('upload/universties/'.$name_gen2);
            $save_url2 = 'upload/universties/'.$name_gen2;

            Universty::insert([
                'title' => $request->title,
                'email' => $request->email,
                'short_desc' => $request->short_desc,
                'contact' => $request->contact,
                'country' => $request->country,
                'long_desc' => $request->long_desc,
                'city' => $request->city,
                'address' => $request->address,
                'website' => $request->website,
                'image1' => $save_url1,
                'image2' => $save_url2,
                'facebook' => $request->facebook,
                'instgram' => $request->instgram,
                'twitter' => $request->twitter,
                'youtube' => $request->youtube,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم اضافه الجامعه بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->route('Universtey.index')->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Universty $universty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $universty = Universty::findorfail($id);
        return view('admin.universtey.edit_universtey',compact('universty'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $university_id = $request->id;
            if ($request->file('image1') || $request->file('image2') ) {

                $image1 = $request->file('image1');
                $name_gen1 = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();  // 3434343443.jpg
                Image::make($image1)->resize(430, 327)->save('upload/universties/' . $name_gen1);
                $save_url1 = 'upload/universties/' . $name_gen1;

                $image2 = $request->file('image2');
                $name_gen2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();  // 3434343443.jpg
                Image::make($image2)->resize(430, 327)->save('upload/universties/' . $name_gen2);
                $save_url2 = 'upload/universties/' . $name_gen2;

                Universty::findOrFail($university_id)->update([
                    'title' => $request->title,
                    'email' => $request->email,
                    'short_desc' => $request->short_desc,
                    'contact' => $request->contact,
                    'country' => $request->country,
                    'long_desc' => $request->long_desc,
                    'city' => $request->city,
                    'address' => $request->address,
                    'website' => $request->website,
                    'image1' => $save_url1,
                    'facebook' => $request->facebook,
                    'instgram' => $request->instgram,
                    'twitter' => $request->twitter,
                    'youtube' => $request->youtube,
                    'updated_at' => Carbon::now(),
                ]);
                $notification = array(
                    'message' => 'تم تحديث بيانات الجامعه بنجاح مع تحديث الصور',
                    'alert-type' => 'info'
                );
                return redirect()->route('Hospitals.index')->with($notification);
            } else {
                Universty::findOrFail($university_id)->update([
                    'title' => $request->title,
                    'email' => $request->email,
                    'short_desc' => $request->short_desc,
                    'contact' => $request->contact,
                    'country' => $request->country,
                    'long_desc' => $request->long_desc,
                    'city' => $request->city,
                    'address' => $request->address,
                    'website' => $request->website,
                    'facebook' => $request->facebook,
                    'instgram' => $request->instgram,
                    'twitter' => $request->twitter,
                    'youtube' => $request->youtube,
                    'updated_at' => Carbon::now(),
                ]);
                $notification = array(
                    'message' => 'تم تحديث بيانات الجامعه فقط بدون الصور',
                    'alert-type' => 'info'
                );
                return redirect()->route('Universtey.index')->with($notification);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $Universty = Universty::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'تم حذف الجامعه بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function DeleteUniversty($id){
        try {
            Universty::findOrFail($id)->delete();
            $notification = array(
                'message' => 'تم حذف الجامعه بنجاح',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method

    public function AllUniversties(){
        $universties = Universty::all();
        return view('12student.universtey.universties',compact('universties'));
    }

    public function UniverstyDetails($id){
        $universty = Universty::findorfail($id);
        return view('12student.universtey.universty_details',compact('universty'));
    }

    public function UniverstySpecilazation($id){
        $specilizations = Specialization::where('universty_id',$id)->orderBy('id','DESC')->get();
        return view('12student.universtey.specializations',compact('specilizations'));
    }

    public function AllBanners ()
    {
        $universties = Universty::latest()->get();
        return view('12student.banners.banners',compact('universties'));
    }

    public function BannerDetails($id){
        $universty = Universty::findorfail($id);
        $specilizations = Specialization::where('universty_id',$id)->orderBy('id','DESC')->get();
        return view('12student.banners.banner_details',compact('universty','specilizations'));
    }

}
