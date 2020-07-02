<?php
date_default_timezone_set('Europe/Berlin');

$date1=new DateTime();
echo '<p>'.$date1->format('Y/m/d à H:i:s').'</p>';

$date2=new DateTime('2020-06-22 9:0:0');
echo '<p>'.$date2->format('Y/m/d à H:i:s').
'</p>';

$intervale=$date2->diff($date1);

echo '<p>'.$intervale->format('%a Jours, ');
echo $intervale->format('%H Heures, ');
echo $intervale->format('%i Minutes ').'depuis le début de la piscine.</p>';
?>