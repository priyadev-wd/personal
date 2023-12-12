<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class PageController extends Controller
{
    public function contactUs()
    {
        return view('contact-us');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function service($slug)
    {
        $data['slug'] = $slug;
        if($slug == "asphalt-paving")
        {
            return view('services', $data);
        }
        elseif($slug == "excavation")
        {
            return view('services1', $data);
        }
        elseif($slug == "pit-and-quarry")
        {
            return view('services3', $data);
        }
        elseif($slug == "salt-transportation")
        {
            return view('services2', $data);
        }

    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // Get the input data

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ];

        // Send the email
        try {
            Mail::to('priyadev7861@gmail.com')->send(new ContactMessage($data));
            return redirect()->back()->with('success', 'Email sent successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error in sending email.');
        }
    }

}
