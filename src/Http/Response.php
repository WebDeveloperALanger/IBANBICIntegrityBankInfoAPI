<?php

namespace AndreLanger\IbanBicIntegrityBankInfoApi\Http;

class Response
{

    /**
     * @var int
     */
    private int $statusCode = 200;

    /**
     * @var array
     */
    private array $headers = [];

    /**
     * @var string
     */
    private string $body = '';

    /**
     * @param int $code
     * @return $this
     */
    public function setStatus(int $code): static
    {
        $this->statusCode = $code;
        return $this;
    }

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    public function withHeader($name, $value): self
    {
        $this->headers[$name] = $value;
        return $this;
    }

    /**
     * @param $data
     * @return $this
     */
    public function withJson($data)
    {
        $this->body = json_encode($data);
        $this->withHeader('Content-Type', 'application/json');
        return $this;
    }


    /**
     * @return never
     */
    public function send(): never
    {
        http_response_code($this->statusCode);

        foreach ($this->headers as $name => $value) {
            header("$name: $value");
        }

        echo $this->body;
        exit();
    }

}
