<?php

namespace AndreLanger\IbanBicIntegrityBankInfoApi\ApiV1;

use AndreLanger\IbanBicIntegrityBankInfoApi\Http\Response;

class Api
{

    private Response $response;

    public function __construct()
    {
        $this->response = new Response();
    }

    public function handleRequest()
    {
        // todo implement business logic

        $this->response->send();
    }

}
