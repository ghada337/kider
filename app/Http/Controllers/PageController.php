<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Classroom;
use App\Models\Contact;
use App\Models\Appointment;
use App\Models\Teacher;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use DB;

// sweet alert
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('published', 1)->orderBy('id', 'desc')->take(3)->get();
        // $sql = "SELECT * FROM `testimonials` WHERE `published` = 1 ORDER BY `id` DESC LIMIT 3";
        // $testimonials = DB::select($sql);
        $classrooms = Classroom::where('published', 1)->orderBy('id', 'desc')->take(9)->get();
        $teachers = Teacher::where('published', 1)->orderBy('id', 'desc')->take(3)->get();
        return view("index", compact('testimonials', 'classrooms','teachers'));
    }
    // public function error()
    // {
    //     return view("404");
    // }
    public function __invoke()
    {
        return view('404');
    }

    public function about()
    {
        $teachers = Teacher::where('published', 1)->orderBy('id', 'desc')->take(3)->get();
        return view("about", compact('teachers'));
    }
    public function appointment()
    {
        return view("appointment");
    }
    public function callToAction()
    {
        return view("call-to-action");
    }
    public function classes()
    {
        $testimonials = Testimonial::where('published', 1)->get();
        $classrooms = Classroom::where('published', 1)->orderBy('id', 'desc')->get();
        return view("classes", compact('testimonials', 'classrooms'));
    }
    public function contact()
    {
        return view("contact");
    }
    public function facility()
    {
        return view("facility");
    }
    public function team()
    {
        $teachers = Teacher::where('published', 1)->get();
        return view("team", compact('teachers'));
    }
    public function testimonial()
    {
        $sql = "SELECT * FROM `testimonials` WHERE `published` = 1";
        $testimonials = DB::select($sql);
        return view("testimonial", compact('testimonials'));
    }

    public function contactForm(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|email',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
        ], $messages);
        Contact::create($data);
        Mail::to('eng_peter_elias@gmail.com')->send(new ContactMail($data));
        return back()->with('success','Email sent sucssefully');
    }

    public function appointmentForm(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'guardianName'=>'required|string|max:50',
            'guardianEmail'=>'required|email',
            'childName' => 'required|string|max:50',
            'childAge' => 'required|integer',
            'message' => 'required|string',
        ], $messages);
        Appointment::create($data);
        return back()->with('success','Appointment sat sucssefully');
    }

    public function messages()
    {
        return [
            'image.mimes'=>'Incorrect image type',
            'image.max'=>'Max file size exeeced',
        ];
    }
}
