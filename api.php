<?php
if (!function_exists('base_url')) {
    function base_url($atRoot = FALSE, $atCore = FALSE, $parse = FALSE)
    {
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
            $core = preg_split('@/@', str_replace($SERVER['DOCUMENT_ROOT'], '', realpath(dirname(FILE_))), NULL, PREG_SPLIT_NO_EMPTY);

            if (count($core)) {
                $core = $core[0];
            } else {
                $core = "";
            }
            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf($tmplt, $http, $hostname, $end);
        } else $base_url = 'http://localhost/';
        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
        }
        return $base_url;
    }
}

if (!function_exists('asset')) {
    function asset($path)
    {
        $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
        $join = str_replace($http . "://", "", base_url()) . $path;
        return $http . "://" . str_replace("//", "/", $join);
    }
}

$json_gallery = [
    "success" => true,
    "data" => [
        [
            "image" => asset("/images/mobile/1.jpg"),
            "title" => "1",
        ],
        [
            "image" => asset("/images/mobile/2.jpg"),
            "title" => "2",
        ],
        [
            "image" => asset("/images/mobile/3.jpg"),
            "title" => "3",
        ],
        [
            "image" => asset("/images/mobile/4.jpg"),
            "title" => "4",
        ],
        [
            "image" => asset("/images/mobile/5.jpg"),
            "title" => "5",
        ],
        [
            "image" => asset("/images/mobile/6.jpg"),
            "title" => "6",
        ],
    ]
];

$json_about = [
    "success" => true,
    "data" => [
        "image" => asset("/images/mobile/8.jpg"),
        "description" => "Civilian merupakan Supporter dari mahasiswa Teknik Sipil yang mempunyai rasa kebanggaan, mempunyai, kebersamaan, kekeluargaan dan rasa) peduli terhadap jurusan dan antar sesama mahasiswa di Teknik Sipil.dimana komunitas init bergerak di bidang supporter untuk kebersamaan, mendukung membela dan membawa nama baik khususnya Teknik Sipil Universitas Muhammadiyah Malang."
    ]
];

$json_error = [
    "success" => false,
    "data" => "",
];


function sendnotification($to, $title, $message, $img = "", $datapayload = [])
{
    $msg = urlencode($message);
    $data = array(
        'title' => $title,
        'sound' => "default",
        'msg' => $msg,
        'data' => $datapayload,
        'body' => $message,
        'color' => "#79bc64"
    );
    if ($img) {
        $data["image"] = $img;
        $data["style"] = "picture";
        $data["picture"] = $img;
    }
    $fields = array(
        'to' => $to,
        'notification' => $data,
        'data' => $datapayload,
        "priority" => "high",
    );
    $headers = array(
        'Authorization: key=AAAAh5ahdk8:APA91bGdsj6mNFydz5P15vlhKUgGlmfbLXutYX6_JHZeT_EESgX-mdtbjel66DVecYdbJXSuD5ivZrjz1_zJNJjVVF1ZlVT5NQFOEgmjhauFSYX_xcYYEzPLKnZ7exCGW2WV-yvJGejl',
        'Content-Type: application/json'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields, JSON_FORCE_OBJECT));
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if (isset($_GET['site'])) {
    if ($_GET['site'] == "about") {
        echo json_encode($json_about);
        die;
    } else if ($_GET['site'] == "gallery") {
        echo json_encode($json_gallery);
        die;
    } else if ($_GET['site'] == "notif") {
        $target_hp = "enrbuIjERJOmti8STc6njE:APA91bFX1BxzONu_pjltOe_ZLDvrYDB_cKCAht7QqfQ3FJriN1NCUrsC6vmgvCTSTzcm47us7H0WV8IpY8RSWX2Xo5StHxjWy8pxEu44R3PifWV7iHkyvdxoHTaRD8_9PPqX8mZx9PhB";
        $title = "Welcome to Civil Store";
        $message = "Selamat datang di aplikasi civil store";

        $response = sendnotification($target_hp, $title, $message);
        echo json_encode($response);
        die;
    }
}


echo json_encode($json_error);
die;