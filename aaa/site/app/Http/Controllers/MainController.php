<?php

namespace App\Http\Controllers;

use App\Models\Models\NewUser;
use Illuminate\Http\Request;


class MainController extends Controller
{

//    public function home()
//    {
//        $users = NewUser::all();
//        return view('home', ['users' => $users]);
//    }
//
//    public function about()
//    {
//        $reviews = new ContactDB();
//        $countReview = $reviews->all();
//        $count = 0;
//        foreach ($countReview as $c){
//            $count++;
//        }
//        return view('about', ['count'=>$count]);
//    }
//
//    public function review()
//    {
//        $reviews = new ContactDB();
//        return view('review', ['reviews'=>$reviews->all()]);
//    }
//
//    public function ourContacts()
//    {
//        $reviews = new ContactDB();
//        $countReview = $reviews->all();
//        $count = 0;
//        foreach ($countReview as $c){
//            $count++;
//        }
//        return view('ourContacts', ['count'=>$count]);
//    }
//
//    public function review_check(Request $request)
//    {
//        $valid = $request->validate([
//            'name' => 'required|min:2|max:20',
//            'email' => 'required|min:10|max:50',
//            'subject' => 'max:100|min:1',
//            'message' => 'required|min:15|max:500'
//        ]);
//
//        $review = new ContactDB();
//        $review->name = $request->input('name');
//        $review->email = $request->input('email');
//        $review->subject = $request->input('subject');
//        $review->message = $request->input('message');
//        $review->created_at = date("Y-m-d H:i");
//
//        $review->save();
//
//        return redirect()->route('review');
//    }
//
//    function cmp($a, $b)
//    {
//        if ($a["date"] == $b["date"]) {
//            return 0;
//        }
//        return (strtotime($a["date"]) < strtotime($b["date"])) ? -1 : 1;
//    }
}
