<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/'], function () {

    Route::get('/', function () {
        //redirect to default route
        $defaultPath = env('DEFAULT_PATH', '');
        return redirect($defaultPath ?: '/nec');
    });

});

Route::group(['prefix' => '/nec'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/ques1', [HomeController::class, 'Ques1'])->name('nec.ques1');
    Route::get('/ques2', [HomeController::class, 'Ques2'])->name('nec.ques2');
    Route::get('/ques3', [HomeController::class, 'Ques3'])->name('nec.ques3');
    Route::get('/ques4', [HomeController::class, 'Ques3'])->name('nec.ques4');
    Route::get('/finalstep', [HomeController::class, 'FinalStep'])->name('nec.finalstep');
    Route::get('/thankyou', [HomeController::class, 'Thankyou'])->name('nec.thankyou');

    Route::post('/submitques', [HomeController::class, 'SubmitQues'])->name('nec.submitques');
    Route::post('/submitfinal', [HomeController::class, 'SubmitFinal'])->name('nec.submitfinal');
});

Route::group(['prefix' => '/1'], function () {

    Route::get('/', function (\Illuminate\Http\Request $request) {

        Session::put('questions', ['q1' => null, 'q2' => null]);

        Session::put('subids',
            [
            's1' => $request->get('s1'),
            's2' => $request->get('s2'),
            's3' => $request->get('s3'),
            's4' => $request->get('s4'),
            's5' => $request->get('s5'),
            ]
        );

        Session::put('cid', $request->get('cid'));

        switch ($request->get('aid'))
        {
            case '32': //AW Performance LLC
                Session::put('lp_campaign_id', '6244ba6143a09');
                Session::put('lp_campaign_key', '7dJFvgXKf8xnCPT4zbG9');
                break;
            case '30': //Slick Ads Media
                Session::put('lp_campaign_id', '6244b545e36d4');
                Session::put('lp_campaign_key', 'qfJwR28rXbZNnGcHMFgQ');
                break;
            case '31': //Scale Up Media Agency Inc
                Session::put('lp_campaign_id', '6244ba2d30112');
                Session::put('lp_campaign_key', 'f8V6bTC74gYmKPhz2nXv');
                break;
            case '8': //FB Moderation
                Session::put('lp_campaign_id', '626b10ad8edac');
                Session::put('lp_campaign_key', 'cN4qCD7fyP6jzT8QnM9L');
                break;
            default:
                Session::put('lp_campaign_id', env('LEADSPEDIA_CAMPAIGN_ID'));
                Session::put('lp_campaign_key', env('LEADSPEDIA_CAMPAIGN_KEY'));
        }

        //dd(Session::get('lp_campaign_id'));

        // $phone = env('PHONE_NUMBER');
        $phone = '(888) 522-3884';
        $tel = str_replace(["(", ")", " ", "-"], "", $phone);

        return view('1.index')->with(compact('phone', 'tel'));
    })->name('1.index');

    Route::get('/qualify', function (\Illuminate\Http\Request $request) {

        $q1 = $request->get('q1');

        // $phone = env('PHONE_NUMBER');
        $phone = '(888) 522-3884';
        $tel = str_replace(["(", ")", " ", "-"], "", $phone);

        $questions = Session::get('questions');
        $questions['q1'] = $q1;

        Session::put('questions', $questions);

        return view('1.qualify')->with(compact('phone', 'tel', 'questions'));
    })->name('1.qualify');


    Route::get('/qualify-question2', function (\Illuminate\Http\Request $request) {

        $q2 = $request->get('q2');

        //$phone = env('PHONE_NUMBER');
        $phone = '(888) 522-3884';
        $tel = str_replace(["(", ")", " ", "-"], "", $phone);

        $questions = Session::get('questions');
        $questions['q2'] = $q2;

        Session::put('questions', $questions);

        return view('1.qualify-question2')->with(compact('phone', 'tel', 'questions'));
    })->name('1.qualify-question2');

    Route::get('/qualify-question3', function (\Illuminate\Http\Request $request) {

        $q3 = $request->get('q3');

        //$phone = env('PHONE_NUMBER');
        $phone = '(888) 522-3884';
        $tel = str_replace(["(", ")", " ", "-"], "", $phone);

        $questions = Session::get('questions');
        $questions['q3'] = $q3;

        Session::put('questions', $questions);

        return view('1.qualify-question3')->with(compact('phone', 'tel', 'questions'));
    })->name('1.qualify-question3');

    Route::get('/info', function (\Illuminate\Http\Request $request) {

        $q4 = $request->get('q4');

       // $phone = env('PHONE_NUMBER');
        $phone = '(888) 522-3884';
        $tel = str_replace(["(", ")", " ", "-"], "", $phone);

        $questions = Session::get('questions');
        $questions['q4'] = $q4;

        Session::put('questions', $questions);

        return view('1.info')->with(compact('phone', 'tel', 'questions'));
    })->name('1.info');

    Route::get('/not-qualified', function () {

        //$phone = env('PHONE_NUMBER');
        $phone = '(888) 522-3884';
        $tel = str_replace(["(", ")", " ", "-"], "", $phone);

        return view('1.not-qualified')->with(compact('phone', 'tel'));
    })->name('1.not-qualified');

    Route::get('/success', function () {

        //$phone = env('PHONE_NUMBER');
        $phone = '(888) 522-3884';
        $tel = str_replace(["(", ")", " ", "-"], "", $phone);

        return view('1.success')->with(compact('phone', 'tel'));
    })->name('1.success');

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $subids = Session::get('subids');
        $cid = Session::get('cid');

        $lpCampaignId = Session::get('lp_campaign_id');
        $lpCampaignKey = Session::get('lp_campaign_key');

        $postData = [
            'diagnosed' => $request->get('diagnosed'),
            'given_formula' => $request->get('given_formula'),
            'admitted' => $request->get('admitted'),
            'baby_born' => $request->get('baby_born'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'ip_address' => $request->get('ip_address'),
            'is_bot' => false,
            'qualified' => true,
            'lp_request_id' => (!empty($cid)) ? $cid : $request->get('req_id'),
            'lp_campaign_id' => $lpCampaignId,
            'lp_campaign_key' => $lpCampaignKey,
            'lp_s1' => $subids['s1'] ?: '',
            'lp_s2' => $subids['s2'] ?: '',
            'lp_s3' => $subids['s3'] ?: '',
            'lp_s4' => $subids['s4'] ?: '',
            'lp_s5' => $subids['s5'] ?: '',
            'path' => '/1'
        ];

        $guzzle = new \GuzzleHttp\Client();

        $ipqsParams = array(
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'user_language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
            'strictness' => 1,
            'allow_public_access_points' => 'true'
        );
        $ipqsFormattedParams = http_build_query($ipqsParams);
        $ipqsURL = sprintf(
            'https://www.ipqualityscore.com/api/json/ip/%s/%s?%s',
            'O3AT606i4GvBJBC5ePetx3rGXzIMxapj',
            $postData['ip_address'],
            $ipqsFormattedParams
        );
        $ipqsJSON = $guzzle->get($ipqsURL)->getBody()->getContents();
        $ipqsObj = json_decode($ipqsJSON);


        if(isset($ipqsObj->success) && $ipqsObj->success == true)
        {
            if($ipqsObj->proxy == true || $ipqsObj->is_crawler == true || $ipqsObj->tor == true)
            {
                $postData['is_bot'] = true;
            }
        }

        //check if qualified lead or not

        $request = $guzzle->request('POST', 'https://track.legalinjuryadvocates.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();

        //dd($postData, $response);

        Session::put('fb', null);

        if($postData['diagnosed'] == 'no' && $postData['given_formula'] == 'no' && $postData['admitted'] == 'no'){
            Session::put('fb', 'no');
        }else{
            Session::put('fb', 'yes');
        }

        return redirect()->to('/1/success');

    })->name('1.post-lead');

});

Route::group(['prefix' => '/2'], function () {

    Route::get('/', function (\Illuminate\Http\Request $request) {
        return view('2.index');
    })->name('2.index');

    Route::get('/success', function () {
        return view('2.success');
    })->name('2.success');

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $postData = [
            'diagnosed' => $request->get('diagnosis_with_nec'),
            'given_formula' => $request->get('diagnosis_with_be_nec'),
            'admitted' => $request->get('admitted_nicu'),
            'baby_born' => $request->get('baby_born'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'ip_address' => $request->get('ip_address'),
            'is_bot' => false,
            'qualified' => true,
            'lp_request_id' => $request->get('req_id'),
            'lp_campaign_id' => '61d481bdb517a',
            'lp_campaign_key' => 'MhCkJKxHGZPYrqLNDB7z',
            'lp_s1' => $request->get('s1'),
            'lp_s2' => $request->get('s2'),
            'lp_s3' => $request->get('s3'),
            'lp_s4' => $request->get('s4'),
            'lp_s5' => $request->get('s5'),
            'path' => '/2'
        ];

        $guzzle = new \GuzzleHttp\Client();

        $ipqsParams = array(
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'user_language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
            'strictness' => 1,
            'allow_public_access_points' => 'true'
        );
        $ipqsFormattedParams = http_build_query($ipqsParams);
        $ipqsURL = sprintf(
            'https://www.ipqualityscore.com/api/json/ip/%s/%s?%s',
            'O3AT606i4GvBJBC5ePetx3rGXzIMxapj',
            $postData['ip_address'],
            $ipqsFormattedParams
        );
        $ipqsJSON = $guzzle->get($ipqsURL)->getBody()->getContents();
        $ipqsObj = json_decode($ipqsJSON);

        if(isset($ipqsObj->success) && $ipqsObj->success == true)
        {
            if($ipqsObj->proxy == true || $ipqsObj->is_crawler == true || $ipqsObj->tor == true)
            {
                $postData['is_bot'] = true;
            }
        }

        //check if qualified lead or not
        $request = $guzzle->request('POST', 'https://track.legalinjuryadvocates.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();

        Session::put('fb', null);

        if($postData['diagnosed'] == 'No' && $postData['given_formula'] == 'No' && $postData['admitted'] == 'No'){
            Session::put('fb', 'no');
        }else{
            Session::put('fb', 'yes');
        }

        return redirect()->to('/2/success');

    })->name('2.post-lead');

});
// Route::group(['prefix' => '/1'], function () {

//     Route::get('/', function () {
//         return view('paraquat.index');
//     });

// });

// Route::group(['prefix' => '/2'], function () {

//     Route::get('/', function () {
//         return view('index');
//     });

//     Route::get('/step-2', function (Request $req) {
//         return view('paraquat.step-2')->with(compact($req));
//     });

//     Route::get('/info', function () {
//         return view('paraquat.info');
//     });

// });


// Route::group(['prefix' => '/2'], function () {

//     Route::get('/', function (\Illuminate\Http\Request $request) {

//         Session::put('questions', ['q1' => null, 'q2' => null]);

//         return view('2.index');
//     })->name('2.index');

//     Route::get('/step-2', function (\Illuminate\Http\Request $request) {

//         $q1 = $request->get('q1');

//         $questions = Session::get('questions');
//         $questions['q1'] = $q1;

//         Session::put('questions', $questions);

//         return view('2.step-2');
//     })->name('2.step-2');



//     Route::get('/info', function (\Illuminate\Http\Request $request) {

//         $q2 = $request->get('q2');

//         $questions = Session::get('questions');
//         $questions['q2'] = $q2;

//         Session::put('questions', $questions);

//         if (!isset($questions['q1'], $questions['q2']))
//         {
//             return redirect('/2');
//         }

//         return view('2.info')->with(compact('questions'));

//     })->name('2.info');

//     Route::get('/not-qualified', function () {
//         return view('2.not-qualified');
//     })->name('2.not-qualified');

//     Route::get('/success', function () {
//         return view('2.success');
//     })->name('2.success');

//     Route::post('/', function (\Illuminate\Http\Request $request) {

//         $postData = [
//             'diagnosis' => $request->get('diagnosis'),
//             'medicine_taken' => $request->get('medicine_taken'),
//             'first_name' => $request->get('first_name'),
//             'last_name' => $request->get('last_name'),
//             'email_address' => $request->get('email_address'),
//             'zip_code' => $request->get('zip_code'),
//             'notes' => $request->get('notes'),
//             'phone_home' => $request->get('phone_home'),
//             'phone_cell' => $request->get('phone_cell'),
//             'ip_address' => $request->get('ip_address'),
//             'is_bot' => false,
//             'qualified' => true,
//             'lp_request_id' => $request->get('req_id'),
//             'lp_campaign_id' => '61d481bdb517a',
//             'lp_campaign_key' => 'MhCkJKxHGZPYrqLNDB7z',
//             'lp_s1' => $request->get('s1'),
//             'lp_s2' => $request->get('s2'),
//             'path' => '/2'
//         ];

//         $guzzle = new \GuzzleHttp\Client();

//         $ipqsParams = array(
//             'user_agent' => $_SERVER['HTTP_USER_AGENT'],
//             'user_language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
//             'strictness' => 1,
//             'allow_public_access_points' => 'true'
//         );
//         $ipqsFormattedParams = http_build_query($ipqsParams);
//         $ipqsURL = sprintf(
//             'https://www.ipqualityscore.com/api/json/ip/%s/%s?%s',
//             'O3AT606i4GvBJBC5ePetx3rGXzIMxapj',
//             $postData['ip_address'],
//             $ipqsFormattedParams
//         );
//         $ipqsJSON = $guzzle->get($ipqsURL)->getBody()->getContents();
//         $ipqsObj = json_decode($ipqsJSON);

//         if(isset($ipqsObj->success) && $ipqsObj->success == true)
//         {
//             if($ipqsObj->proxy == true || $ipqsObj->is_crawler == true || $ipqsObj->tor == true)
//             {
//                 $postData['is_bot'] = true;
//             }

//         }

//         //check if qualified lead or not


//         $request = $guzzle->request('POST', 'https://track.legalinjuryadvocates.com/post.do', [
//             'form_params' => $postData
//         ]);

//         $response = $request->getBody()->getContents();

//         return redirect()->to('/2/success');

//     })->name('2.post-lead');

//     });

Route::group(['prefix' => '/3'], function () {

    Route::get('/', function (\Illuminate\Http\Request $request) {

        Session::put('questions', ['q1' => null, 'q2' => null, 'q3' => null]);
        $phone = "(866) 529-3403";
        $tel = "8665293403";

        return view('3.index')->with(compact('phone', 'tel'));
    });

    Route::get('/qualify', function (\Illuminate\Http\Request $request) {

        $q1 = $request->get('q1');

        $questions = Session::get('questions');
        $questions['q1'] = $q1;

        Session::put('questions', $questions);

        $phone = "(866) 529-3403";
        $tel = "8665293403";

        return view('3.qualify')->with(compact('phone', 'tel'));
    });

    Route::get('/not-qualified', function (\Illuminate\Http\Request $request) {

        $phone = "(866) 529-3403";
        $tel = "8665293403";

        return view('3.not-qualified')->with(compact('phone', 'tel'));
    });

    Route::get('/info', function (\Illuminate\Http\Request $request) {

        $q2 = $request->get('q2');

        $questions = Session::get('questions');
        $questions['q2'] = $q2;

        Session::put('questions', $questions);

        if (!isset($questions['q1'], $questions['q2']))
        {
            return redirect('/3');
        }

        $phone = "(866) 529-3403";
        $tel = "8665293403";

        return view('3.info')->with(compact('phone', 'tel','questions'));
    });

    Route::get('/not-qualified', function () {
        return view('3.not-qualified');
    })->name('3.not-qualified');

    Route::get('/success', function () {
        $phone = "(866) 529-3403";
        $tel = "8665293403";
        return view('3.success')->with(compact('phone', 'tel'));
    })->name('3.success');

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $postData = [
            'diagnosis' => $request->get('diagnosis'),
            'medicine_taken' => $request->get('medicine_taken'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'phone_cell' => $request->get('phone_cell'),
            'ip_address' => $request->get('ip_address'),
            'is_bot' => false,
            'qualified' => true,
            'lp_request_id' => $request->get('req_id'),
            'lp_campaign_id' => '61d481bdb517a',
            'lp_campaign_key' => 'MhCkJKxHGZPYrqLNDB7z',
            'lp_s1' => $request->get('s1'),
            'lp_s2' => $request->get('s2'),
            'path' => '/3'
        ];

        $guzzle = new \GuzzleHttp\Client();

        $ipqsParams = array(
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'user_language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
            'strictness' => 1,
            'allow_public_access_points' => 'true'
        );
        $ipqsFormattedParams = http_build_query($ipqsParams);
        $ipqsURL = sprintf(
            'https://www.ipqualityscore.com/api/json/ip/%s/%s?%s',
            'O3AT606i4GvBJBC5ePetx3rGXzIMxapj',
            $postData['ip_address'],
            $ipqsFormattedParams
        );
        $ipqsJSON = $guzzle->get($ipqsURL)->getBody()->getContents();
        $ipqsObj = json_decode($ipqsJSON);

        if(isset($ipqsObj->success) && $ipqsObj->success == true)
        {
            if($ipqsObj->proxy == true || $ipqsObj->is_crawler == true || $ipqsObj->tor == true)
            {
                $postData['is_bot'] = true;
            }

        }

        //check if qualified lead or not


        $request = $guzzle->request('POST', 'https://track.legalinjuryadvocates.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();

        return redirect()->to('/3/success');

    })->name('3.post-lead');

});

Route::post('/process', function () {

    //processing logic goes here
    //then send to Leadspedia API
    //then redirect to success page

});

Route::get('/success', function () {
    return view('success');
});

Route::get('/terms', function () {
    $phone = '(888) 522-3884';
    $tel = str_replace(["(", ")", " ", "-"], "", $phone);
    return view('terms')->with(compact('phone', 'tel'));
});

Route::get('/privacy', function () {
    $phone = '(888) 522-3884';
    $tel = str_replace(["(", ")", " ", "-"], "", $phone);
    return view('privacy')->with(compact('phone', 'tel'));
});

Route::get('/ccpa', function () {
    $phone = '(888) 522-3884';
    $tel = str_replace(["(", ")", " ", "-"], "", $phone);
    return view('ccpa')->with(compact('phone', 'tel'));
});

Route::get('/donotsell', function () {
    $phone = '(888) 522-3884';
    $tel = str_replace(["(", ")", " ", "-"], "", $phone);
    return view('donotsell')->with(compact('phone', 'tel'));
});
