<?php 

function getToken($client_id, $secret_token)
{     
     $jsonData = json_encode(array(
          'client_id'         => $client_id, 
          'client_secret'     => $secret_token,
          'audience'          => 'https://useavalanche.us.auth0.com/api/v2/',
          'grant_type'        => 'client_credentials'
     ));
     
     $ch=curl_init('https://useavalanche.us.auth0.com/oauth/token');
     
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
     curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_HEADER, false);
     curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type:application/json'));
     
     $result = curl_exec($ch);
     
     curl_close($ch);
     
     $resp = [];
     
     if($result){
          $response = json_decode( $result );
          if(isset($response->token_type) && !empty($response->token_type) && isset($response->access_token) && !empty($response->access_token)){ 
               $resp['token'] = $response->token_type." ".$response->access_token;
          }
     }
     echo json_encode($resp);
}

getToken('K41DI7udEo4OGVFRnECcJWeeyrqTpllW', 'kT-GB15wM_LUdtbho3YMUQBb_5SsVTIrLYb3K2Vzf-Jz0XYxTC2BEJj20r7z5M5k');