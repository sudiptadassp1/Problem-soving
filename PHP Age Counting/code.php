<?php 
  $ch = curl_init('https://coderbyte.com/api/challenges/json/age-counting');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $data = curl_exec($ch);
  curl_close($ch);

  $new_arr = json_decode($data,true);
  $age_count = 0;
  foreach($new_arr as $arr){
    $sorted_arr = explode(',', $arr);
    foreach($sorted_arr as $k=>$v){
      if(!($k%2) == 0){
        $satitize_int = filter_var($v, FILTER_SANITIZE_NUMBER_INT);
        if($satitize_int >= 50){
          $age_count += 1;
        }
      }
    }
    echo "Total: ".$age_count;
  }

?>