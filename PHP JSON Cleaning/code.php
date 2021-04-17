<?php 
  $ch = curl_init('https://coderbyte.com/api/challenges/json/json-cleaning');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $data = curl_exec($ch);
  curl_close($ch);

  $root_arr = json_decode($data, true);

 function array_depth(array &$array) {
    foreach ($array as $key => &$value) {
        if (is_array($value)) {
            array_depth($value);
        }else{
            if(($value == "-") || ($value == "") || ($value == "N/A")){
                unset($array[$key]);
            }
        }
    }
  }

array_depth($root_arr);
print_r(json_encode(array_values($root_arr)));

?>