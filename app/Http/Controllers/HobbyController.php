<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use App\Hobby;
use Auth;
use Twilio\Rest\Client;
use App\Mail\NewHobby;
class HobbyController extends Controller
{
    //
    

    public function __construct(){

        $this->middleware('auth');
    }


    public function user_account(){
        if(!Auth::check()){
            return redirect('/');
        }
        $user_hobbies = Hobby::where('user_id', '=', Auth::id())->get();
        $sn = 0;
        return view('user_account', compact('user_hobbies','sn'));
    }


    public function add_hobby(Request $request){
        Hobby::create([
            'hobby' => $request->get('new_hobby'),
            'user_id' => Auth::id(),
        ]);
        $user = Auth::user();

        //This sends an email to the user,informing the user that a new hobby has been added
        \Mail::to($user)->send(new NewHobby($user));

        //This sends an sms,informing the user that anew hobby has been added
        // $this->send_sms();
        return redirect("/account");
    }


    public function send_sms(){
        $account_sid = 'Twillio Account sid';
        $auth_token = 'Twillio Account auth token';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = "+1 850 988 8873";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
            Auth::user()->phone_number,
            array(
                'from' => $twilio_number,
                'body' => 'Hello '.Auth::user()->username.' you just added a new hobby to MyHobby app'
            ));
    }


    public function logout(){
    	Session::flush();
    	return redirect('/');
    }
}
