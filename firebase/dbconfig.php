<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('sample-d4eda-firebase-adminsdk-57qi1-34dd306d09.json')
->withDatabaseUri('https://sample-d4eda-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();