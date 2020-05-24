<?php
header('Content-Type: text/xml');
print '<?xml version="1.0"?>' . "\n";

print "<programmes>\n";
    $programmes=array(
      array('nom'=>'Fleurine Kenley',
      'chaine'=> 'TF18',
      'debut' => '21:00',
      'duree' => '30'),
      array('nom'=>'Blake et Mortimer',
      'chaine'=> 'M54',
      'debut' => '20:00',
      'duree' => '60'),
    array('nom'=>'James et Pierre',
    'chaine'=> 'D52',
    'debut' => '10:00',
    'duree' => '90')
    );

foreach ($programmes as $show) {
      print "\t<show>\n";
       foreach($show as $tag => $data) {
         print "\t<$tag>"
       . htmlspecialchars($data)
        . "\t</$tag>\n";
         }
        print "</show>\n";
    }
print "</programmes>\n";
?>
