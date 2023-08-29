<?php

namespace AndreLanger\IbanBicIntegrityBankInfoApi\Controllers;

use AndreLanger\IbanBicIntegrityBankInfoApi\Services\BankInfoService;
use AndreLanger\IbanBicIntegrityBankInfoApi\Http\Response;

class BankInfoController
{

    /**
     * @var BankInfoService
     */
    protected BankInfoService $bankInfoService;

    /**
     * @param BankInfoService $service
     */
    public function __construct(BankInfoService $service)
    {
        $this->bankInfoService = $service;
    }

    /**
     * @param string $iban
     * @param Response|null $response
     * @return Response
     */
    public function getBankInfoByIBAN(string $iban, ?Response $response): Response
    {
        if (!$response) {
            $response = new Response();
        }

        $bankInfo = $this->bankInfoService->getBankInfoByIBAN($iban);

        if ($bankInfo) {
            return $response->withJson($bankInfo);
        } else {
            return $response->setStatus(404)->withJson(['error' => 'Not Found']);
        }
    }

}
