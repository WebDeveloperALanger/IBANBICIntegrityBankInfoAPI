<?php
require_once '../../vendor/autoload.php';

use AndreLanger\IbanBicIntegrityBankInfoApi\ApiV1\Api;

$api = new Api();
$api->handleRequest();
