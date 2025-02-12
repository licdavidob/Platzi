<?php

require_once __DIR__ . '/vendor/autoload.php';

$uri = 'mongodb+srv://escanor:escanor@david-olvera-cluster.lkbtnav.mongodb.net/?retryWrites=true&w=majority&appName=David-Olvera-Cluster';
$client = new MongoDB\Client($uri);

$accountsCollection = $client->bank->accounts;

// Buscamos por _id
$filter = ['_id' => new MongoDB\BSON\ObjectId('67ad26646b2c31c765006a42')];

// Buscamos por account_holder
$filter = ['account_holder' => 'Linus Torvalds'];

// Buscamos por account_id y account_type
$filter = ['account_id' => 'MDB011235813', 'account_type' => 'checking'];

$result = $accountsCollection->findOne($filter);

var_dump($result);


// Buscamos VARIOS documentos
$filter = ['balance' => ['$gt' => new MongoDB\BSON\Decimal128('4700')]];

$cursor = $accountsCollection->find($filter);

foreach ($cursor as $account) {
  var_dump($account);
}