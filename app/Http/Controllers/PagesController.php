<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; 

use Mail;

use App\Team;

use Session;


class PagesController extends Controller
{
     public function index()
    {
        return view('pages.welcome');
    }


     public function practice()
    {
        return view('pages.practice');
    }



    public function tutorial()
    {
        return view('pages.tutorial');
    }




     public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('blog.posts')->withPosts($posts);
    }



     public function blogDetail()
    {
        return view('posts.blog-details');
    }

      public function getContact()
    {
        return view('pages.contact');
    }

       public function getTeam()
    {
          
        $teams = Team::all();
        return view('pages.team')->withTeams($teams);
    }

      public function postContact(Request $request)
    {
      $this->validate($request, [
       'email' => 'required|email',
       'subject' => 'min:3',
       'message' => 'min:10'
       ]);

      $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
      );

      \Mail::send('emails.contact', $data , function($message) use ($data){
          $message->from( $data['email']);
          $message->to('johnwealth.ise@gmail.com');
          $message->subject($data['subject']);
      });



         Session::flash('success', ' the Mail is successfully saved!');

        return redirect('/');
    }

 

}
