<?php


use Illuminate\Support\Facades\Request;

function responseJson($status, $message, $data=null)
{
    $response= [
        'status' => $status,
        'message' => $message,
        'data' => $data,
        ];
    return response()->json($response);
}
function fitImage($path,$width)
    {
        $interventionImage = Intervention\Image\Facades\Image::make($path);
        $interventionImage->resize($width, null, function ($constraint) {
        $constraint->aspectRatio();
    });
        $interventionImage->save($path);
}
function smsMisr($to, $message)
{
    $url = 'URL: https://smsmisr.com/api/webapi/?';
    $push_payload = array(
        "username" => "Ux23gQs9",
        "password" => "v9vo7R9sFG",
        "language" => "2",
        "sender" => "Azhary Academy",
        "mobile" => '2' . $to,
        "message" => $message,
    );

    $rest = curl_init();
    curl_setopt($rest, CURLOPT_URL, $url.http_build_query($push_payload));
    curl_setopt($rest, CURLOPT_POST, 1);
    curl_setopt($rest, CURLOPT_POSTFIELDS, $push_payload);
    curl_setopt($rest, CURLOPT_SSL_VERIFYPEER, true);  //disable ssl .. never do it online
    curl_setopt($rest, CURLOPT_HTTPHEADER,
        array(
            "Content-Type" => "application/x-www-form-urlencoded"
        ));
    curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1); //by ibnfarouk to stop outputting result.
    $response = curl_exec($rest);
    curl_close($rest);
    return $response;
}
