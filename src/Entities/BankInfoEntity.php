<?php

namespace AndreLanger\IbanBicIntegrityBankInfoApi\Entities;

class BankInfoEntity
{
    public ?int $id;
    public ?string $bankCode;
    public ?string $name;
    public ?string $shortName;
    public ?string $postalCode;
    public ?string $city;
    public ?string $bic;
    public ?string $countryCode;


}
