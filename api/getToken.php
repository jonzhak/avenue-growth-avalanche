<?php 

function getToken(){
     
     $url                = 'https://useavalanche.us.auth0.com/oauth/token';
     $client_id          = 'NiwToJ2Mlkn4ubzbymnC18vM08WSXyb';
     $client_secret      = '_BxwOPM0xfZ6n2OUch75BjuJ8kvvuOzSLzZtmoGp5rCVfW3neYIQkBaTnGmMLWDM';

     $data = array(
          'client_id' => $client_id, 
          'client_secret' => $client_secret,
          'audience' => 'https://useavalanche.us.auth0.com/api/v2/',
          'grant_type' => 'client_credentials'
     );
     
     $data_string = json_encode($data);
     $ch=curl_init($url);
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_HEADER, false);
     curl_setopt($ch, CURLOPT_HTTPHEADER,
          array(
               'Content-Type:application/json',
          )
     );

     $result = curl_exec($ch);
     
     curl_close($ch);
     
     $response = [];

     if($result){
          $response = json_decode( $result );

          if(isset($response->token_type) && !empty($response->token_type) && isset($response->access_token) && !empty($response->access_token)){
               $response['token'] = $response->token_type." ".$response->access_token;
          }
     }

     echo $response;
}

if($_GET['getToken']){ getToken() };