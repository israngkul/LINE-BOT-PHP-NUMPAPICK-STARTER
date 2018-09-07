 <?php
  

function send_LINE($msg){
 $access_token = 'LtooZVH2hypDa0NM8b4hy/Cj9tTxaS5WkMnRk959IKbL/8lH80juoRcRV263I3/uj18hz6RShvplHeXFmP5kHLM514LJyQ5gq53gmOmOY1VtN1P8X3FVTl9FkGH8C7ptSnAissMNCs3bgWTe4voeEQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '28eb0ef0b53631f1581716b309b1acbb',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
