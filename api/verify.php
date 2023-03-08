<?php
require('../core/require/includes.php');

$curl = curl_init();
$panel_url = $_CONFIG['cb_url'] . '/cloudAPI/';
curl_setopt_array($curl, array(
  CURLOPT_URL => $panel_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"serverUserName": "'.$_CONFIG['cb_user'].'",
	"controller": "verifyLogin"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: '.$_CONFIG["cb_auth"]
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
$data = json_decode($response, true);
if ($data['error_message'] == null){
    
}
else if ($data['error_message'] == "")
{
    echo '<script>alert("FATAL ERROR: CHECK CONFIG NOW!!!");</script>';
}
else 
{
    echo '<script>alert("'.$data['error_message'].'")</script>';
}

?>