<?php

$date = new dateTime();
$date->modify("1 Year 2 months 3 days 5 hours");
echo $date->format("Y/m/d  h:i:s a ");
