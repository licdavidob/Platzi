<?php

require_once __DIR__ . '/vendor/autoload.php';

$uri = 'mongodb+srv://escanor:escanor@david-olvera-cluster.lkbtnav.mongodb.net/?retryWrites=true&w=majority&appName=David-Olvera-Cluster';
$client = new MongoDB\Client($uri);

$accountsCollection = $client->bank->accounts;

// Eliminamos un documento en la colección "accounts" de la base de datos "bank"
$filter = ['_id' => new MongoDB\BSON\ObjectID('67ad2677921c4d793c090b83')];

$deleteOneResult = $accountsCollection->deleteOne($filter);

printf("Deleted %d document(s)\n", $deleteOneResult->getDeletedCount());

printf("Searching for target document after delete:\n");
var_dump($accountsCollection->findOne($filter));

// Eliminamos varios documentos en la colección "accounts" de la base de datos "bank"
$filter = ['balance' => ['$lt' => new MongoDB\BSON\Decimal128('2000')]];

$deleteManyResult = $accountsCollection->deleteMany($filter);

printf("Deleted %d document(s)\n", $deleteManyResult->getDeletedCount());