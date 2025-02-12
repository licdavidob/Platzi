<?php

require_once __DIR__ . '/vendor/autoload.php';

$uri = 'mongodb+srv://escanor:escanor@david-olvera-cluster.lkbtnav.mongodb.net/?retryWrites=true&w=majority&appName=David-Olvera-Cluster';
$client = new MongoDB\Client($uri);

$accountsCollection = $client->bank->accounts;

// Actualizamos un documento en la colección "accounts" de la base de datos "bank"
$filter = ['_id' => new MongoDB\BSON\ObjectId('67ad26276617ad8f6e0bdec2')];

$addToBalance = [
    '$inc' => [
        'balance' => new MongoDB\BSON\Decimal128('100'),
    ]
];

var_dump($accountsCollection->findOne($filter));

$updateOneResult = $accountsCollection->updateOne($filter, $addToBalance);

// Matched: Nos indica cuántos documentos coincidieron con el filtro.
printf("Matched %d document(s)\n", $updateOneResult->getMatchedCount());

// Modified: Nos indica cuántos documentos fueron modificados.
printf("Modified %d document(s)\n", $updateOneResult->getModifiedCount());

$updatedExample = $accountsCollection->findOne($filter);

var_dump($updatedExample);

// Actualizamos varios documentos en la colección "accounts" de la base de datos "bank"
$filter = ['account_type' => 'savings'];

$setField = ['$set' => ['minimum_balance' => new MongoDB\BSON\Decimal128('100')]];

$updateManyResult = $accountsCollection->updateMany($filter, $setField);

printf("Matched %d document(s)\n", $updateManyResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateManyResult->getModifiedCount());

$updatedExample = $accountsCollection->findOne($filter);

var_dump($updatedExample);