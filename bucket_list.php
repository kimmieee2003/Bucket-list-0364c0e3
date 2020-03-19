<?php
echo "Hoe veel activiteiten wil je toevoegen?";
$activiteiten = readline();
if(is_numeric($activiteiten)) {
    $bucket = array();
  for($i=1; $i <= $activiteiten; $i++){
  echo "welke activiteiten wil je toevoegen?";
  $item = readline();
  array_push($bucket, $item);
  }
echo 'In uw bucketlist staat:' ."\n";
  for($c = 0; $c <= $activiteiten; $c++){
echo '$bucket[$c]'."\n";
  }
}else{
    echo "dit is geen getal.";
}
?>