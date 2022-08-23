<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

class HomeController extends Controller
{

    protected $user;
    protected $loggeduser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Session::forget('completed');
        Session::forget('ques1');
        Session::forget('ques2');
        Session::forget('ques3');
        Session::forget('ques4');
        Session::forget('res');
        return view('nec.home', []);
    }

    public function Ques1()
    {
        if(Session::has('ques1')) {
            return view('nec.ques1');
        }
        return redirect('/nec');
    }
    
    public function Ques2()
    {
        if(Session::has('ques2')) {
            return view('nec.ques2', []);
        }
        return redirect('/nec/ques1');
    }
    
    public function Ques3()
    {
        if(Session::has('ques3')) {
            return view('nec.ques3', []);
        }
        return redirect('nec/ques2');
    }
    
    public function FinalStep()
    {
        if(Session::has('ques4')) {
            $postData = [];
            if(Session::has('res')){
                $postData = Session::get('res');
            }
            return view('nec.finalstep', [
                'firstname' => (isset($postData['first_name']))?$postData['first_name']:'',
                'lastname'  => (isset($postData['last_name']))?$postData['last_name']:'',
                'phone'     => (isset($postData['phone_home']))?$postData['phone_home']:'',
                'address'   => (isset($postData['address']))?$postData['address']:'',
                'city'      => (isset($postData['city']))?$postData['city']:'',
                'state'     => (isset($postData['state']))?$postData['state']:'',
                'zip_code'  => (isset($postData['zip_code']))?$postData['zip_code']:'',
                'email'     => (isset($postData['email_address']))?$postData['email_address']:'',
                'tellus'    => (isset($postData['comments']))?$postData['comments']:'',
            ]);
        }
        return redirect('nec/ques3');
    }
    
    public function Thankyou()
    {
        if(Session::has('completed')) {
            return view('nec.thankyou', []);
        }
        return view('nec.home', []);
    }

    public function SubmitQues(Request $request)
    {
        if($request->ques == 'ques1') {
            Session::put('ques1', $request->ques1);
        } else if($request->ques == 'ques2') {
            Session::put('ques2', $request->ques2);
        } else if($request->ques == 'ques3') {
            Session::put('ques3', $request->ques3);
        } else if($request->ques == 'ques4') {
            if($request->ques4 == 'Before2002') {
                Session::put('ques4', 'Before 2002');
            } else {
                Session::put('ques4', $request->ques4);
            }
            
        }
        
        return response()->json(array('sms'=>1));
    }
    
    public function SubmitFinal(Request $request)
    {
        $postData = [
            'lp_campaign_id' => '6244ba6143a09',
            'lp_campaign_key' => '7dJFvgXKf8xnCPT4zbG9',
            'lp_s1' => 'IDG0',
            'lp_s2' => '',
            'lp_s3' => '',
            'lp_s4' => '',
            'lp_s5' => '',
            'lp_test' => 1,
            'lp_response' => 'JSON',
            'diagnosed' => Session::get('ques1'), 
            'given_formula' => Session::get('ques2'),
            'admitted' => Session::get('ques3'),
            'baby_born' => Session::get('ques4'),
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone_home' => $request->phone,
            'address' => $request->address,
            'address2' => '',
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'county'    => '',
            'country'  => 'US',
            'email_address' => $request->email,
            'dob' => '',
            'ip_address' => $this->getUserIp(),
            'comments' => $request->tellus,
        ];
        
        //Filter Null values
        foreach($postData as $key=>$value)
        {
         if(is_null($value) )
            unset($postData[$key]); 
        }

        Session::put('res', $postData);

        $guzzle = new Client();

        $postRequest = $guzzle->request('POST', 'https://track.legalinjuryadvocates.com/post.do', [
            'form_params' => $postData
        ]);

        $postResponse = $postRequest->getBody()->getContents();
        $jsonObject = json_decode($postResponse);
        //dd($jsonObject);

        if($jsonObject->result =='failed'){
            if(isset($jsonObject->errors[0]->error)) {
                return response()->json(array('sms'=>$jsonObject->errors[0]->error));
            }
            return response()->json(array('sms'=>0));
        } else {
            Session::forget('ques1');
            Session::forget('ques2');
            Session::forget('ques3');
            Session::forget('ques4');
            Session::put('completed', 1);
            return response()->json(array('sms'=>1));
        }
        return response()->json(array('sms'=>0));
    }

    public function getUserIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
}
