<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;
use DB;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql = "SELECT * FROM `testimonials` Where `deleted_at` is null";
        $testimonials = DB::select($sql);
        // $testimonials = Testimonial::get();
        return view('admin/testimonial/testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/testimonial/addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'profession'=>'required|string|max:50',
            'description' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        
        //use method from traits called uploadFile
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        $data['published'] = isset($request->published);
        Testimonial::create($data);
        return redirect('testimonials');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sql = "SELECT * FROM `testimonials` WHERE `id` = $id";
        $testimonial = DB::select($sql);
        $testimonial = $testimonial[0];
        // $testimonial = Testimonial::findOrFail($id);
        return view('admin/testimonial/showTestimonial', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sql = "SELECT * FROM `testimonials` WHERE `id` = $id";
        $testimonial = DB::select($sql);
        $testimonial = $testimonial[0];
        return view('admin/testimonial/editTestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'profession'=>'required|string|max:50',
            'description' => 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        if($request->hasFile('image')){
            //use method from traits called uploadFile
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image'] = $fileName;
            //remove old image from server
            unlink("assets/images/".$request->oldImageName);
        }
        $data['published'] = isset($request->published);
        Testimonial::where('id', $id)->update($data);
        return redirect('testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Testimonial::where('id', $id)->delete();    // softdelete
        return redirect('testimonials');
    }

    public function trashed()
    {
        $testimonials = Testimonial::onlyTrashed()->get();
        return view('admin/testimonial/trashedTestimonials', compact("testimonials"));
    }

    public function restore(string $id)
    {
        Testimonial::where('id', $id)->restore(); 
        return redirect('trashedTestimonials');
    }

    public function destroy(string $id)
    {
        $sql = "SELECT `image` FROM `testimonials` WHERE `id` = $id";
        $imageName = DB::select($sql);
        Testimonial::where('id', $id)->forceDelete();
        unlink("assets/images/".$imageName[0]->image);
        return redirect('trashedTestimonials');
    }

    public function messages()
    {
        return [
            'name.string'=>'Should be string',
            'profession.string'=>'Should be text',
            'image.required'=>'Please be sure to select an image',
            'image.mimes'=>'Incorrect image type',
            'image.max'=>'Max file size exeeced',
        ];
    }

}
