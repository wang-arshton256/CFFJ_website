<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Subscriber;


class Subscribercontroller extends Controller
{
    //public function registersubscriber(){



        //return back()->with('Details submited', 'Your details have been submited successfully!');
    //}

    //public function registersubscriber(Request $request){

       // $subscriber = new Subscriber;

       // $subscriber->email = $request->email;

//$subscriber-save();
    //}



    public function RecordSubsriber(Request $request){

        $subscriber = new Subscriber();

        $subscriber->subscriber_email = $request->subscriber_email;


        $subscriber->save();


        return back()->with ('subscriber details submited successfully!');

    }
}

