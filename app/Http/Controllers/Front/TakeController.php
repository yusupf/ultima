<?php


namespace App\Http\Controllers\Front;
use App\Library\Fpp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TakeController extends Controller
{
    public function index(){
        return view('front.take');
    }

    public function takePost(Request $request){
// dd($request->all());
// require('FppClient.php');

$host = 'https://api-us.faceplusplus.com';
$apiKey = 'hcbD-mFhYVJxpUa-xynLTO9IMTHRpd8R';
$apiSecret = '7XXc8q5s308dvoOcSt-rS7E8fZSis7yj';

$client = new Fpp($apiKey, $apiSecret, $host);


if($request->input('img')!='' ){
            $data = $request->input('img');
            $img = explode(',', $data);

            $ini =substr($img[0], 11);
            $type = explode(';', $ini);
            $destinationPath = base_path('public/file/face');
            $fileName = rand(1111111111,9999999999).".{$type[0]}";
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            file_put_contents($destinationPath."/".$fileName, $data);

            $data_resp = array(
                'image_url' => url('/file/face') .'/'.$fileName,
                'return_landmark' => '1',
                'return_attributes' => 'skinstatus', //age,headpose,facequality,eyestatus,
            );
    
            $resp = get_object_vars($client->detectFace($data_resp));
         }

        dd($resp);

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$resp = [];
$data = [];

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $data = array(
            'image_url' => url('/file/facerecognition') . basename( $_FILES["image"]["name"]),
            'return_landmark' => '1',
            'return_attributes' => 'skinstatus', //age,headpose,facequality,eyestatus,
        );

        $resp = get_object_vars($client->detectFace($data));
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    
    echo '<pre>';
    // print_r($data['image_url']);
    dd($resp);
    echo '</pre>';
    // exit;

    }
}
