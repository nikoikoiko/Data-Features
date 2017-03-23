<?php
  $json_string1 = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/CA/San_Francisco.json");
  $parsed_json1 = json_decode($json_string1);
  $city = $parsed_json1->{'location'}->{'city'};
  $lat = $parsed_json1->{'location'}->{'lat'};
  $lon = $parsed_json1->{'location'}->{'lon'};
  $zip = $parsed_json1->{'location'}->{'zip'};
  
  $json_string2 = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/conditions/q/CA/San_Francisco.json");
  $parsed_json2 = json_decode($json_string2);
  $observation_time = $parsed_json2->{'current_observation'}->{'observation_time'};
  $weather = $parsed_json2->{'current_observation'}->{'weather'};
  $temp_c = $parsed_json2->{'current_observation'}->{'temp_c'};
  $relative_humidity = $parsed_json2->{'current_observation'}->{'relative_humidity'};
  
  $json_string3 = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/astronomy/q/CA/San_Francisco.json");
  $parsed_json3 = json_decode($json_string3);
  $phaseofMoon = $parsed_json3->{'moon_phase'}->{'phaseofMoon'};
  $ageOfMoon = $parsed_json3->{'moon_phase'}->{'ageOfMoon'};
  $hemisphere = $parsed_json3->{'moon_phase'}->{'hemisphere'};
  
  echo "PENAMPAKAN CUACA<br><br>";
  echo "Kota : ${city}.<br>";
  echo "Koordinat : ${lat},${lon}.<br>";
  echo "Kode Pos : ${zip}.<br><br><br>";
  
  echo "WAKTU<br><br>";
  echo "Waktu Pengamatan : ${observation_time}.<br>";
  echo "Cuaca : ${weather}.<br>";
  echo "Suhu : ${temp_c}C dengan tingkat kelembaban ${relative_humidity}.<br><br><br>";
  
  echo "FASE BULAN<br><br>";
  echo "Fase Bulan : ${phaseofMoon}.<br>";
  echo "Usia Bulan : ${ageOfMoon}.<br>";
  echo "Belahan Bumi: ${hemisphere}.<br><br><br>";
  
  echo "Oleh : Niko Fitrianto (16.01.63.0028)";
?>

