<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class PagesController extends Controller
{
    public function test()
    {
      $names = [
        'Jim',
        'John',
        'Jake'
      ];

      $people = [
        'name' => 'Sean McDonnell',
        'age' => 29,
        'height' => '5'
      ];
      return view('test', compact('names', 'people'));
    }

    public function about()
    {
        return view('about');
    }

    public function postAbout(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'min:5'
        ]);

        $data = array(
            'bodyEmail'   => $request->email,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($emailHeader) use ($data){
            $emailHeader->from($data['bodyEmail']);
            $emailHeader->to('mcdsean@gmail.com');
            $emailHeader->subject('New Portfolio Contact');
        });

        return Redirect::to(URL::previous() . "#contact")->with('success', 'Your message has been received — I usually respond within 24 hours!');
    }

    public function my_work()
    {
        return view('my-work');
    }

    public function testing()
    {
        return view('testing');
    }
}
