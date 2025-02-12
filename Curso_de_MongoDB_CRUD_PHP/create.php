<?php

require_once __DIR__ . '/vendor/autoload.php';

$uri = 'mongodb+srv://escanor:escanor@david-olvera-cluster.lkbtnav.mongodb.net/?retryWrites=true&w=majority&appName=David-Olvera-Cluster';
$client = new MongoDB\Client($uri);

// Insertamos un documento en la colección "accounts" de la base de datos "bank"

$accountsCollection = $client->bank->accounts;

$sampleAccount = [
  'account_holder' => 'Linus Torvalds',
  'account_id' => 'MDB829001337',
  'account_type' => 'checking',
  'balance' => new MongoDB\BSON\Decimal128('503524.34'),
];
 
$insertOneResult = $accountsCollection->insertOne($sampleAccount);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());

// Insertamos varios documentos en la colección "accounts" de la base de datos "bank"

$sampleAccounts = [
    [
      'account_id' => 'MDB011235813',
      'account_holder' => 'Ada Lovelace',
      'account_type' => 'checking',
      'balance' => new MongoDB\BSON\Decimal128('60218'),
    ],
    [
      'account_id' => 'MDB829000001',
      'account_holder' => 'Muhammad ibn Musa al-Khwarizmi',
      'account_type' => 'savings',
      'balance' => new MongoDB\BSON\Decimal128('267914296'),
    ],
  ];
  
  $insertManyResult = $accountsCollection->insertMany($sampleAccounts);
  
  printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());
  var_dump($insertManyResult->getInsertedIds());