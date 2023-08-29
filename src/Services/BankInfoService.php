<?php

namespace AndreLanger\IbanBicIntegrityBankInfoApi\Services;

use AndreLanger\IbanBicIntegrityBankInfoApi\Entities\BankInfoEntity;

use PDO;

class BankInfoService
{

    /**
     * @var PDO
     */
    protected PDO $db;


    /**
     * @param PDO $dbConnection
     */
    public function __construct(PDO $dbConnection)
    {
        $this->db = $dbConnection;
    }

    /**
     * @param string $bic
     * @return BankInfoEntity|null
     */
    public function getBankInfoByBIC(string $bic): ?BankInfoEntity
    {
        // todo implement
        return null;
    }

    /**
     * @param string $iban
     * @return BankInfoEntity|null
     */
    public function getBankInfoByIBAN(string $iban): ?BankInfoEntity
    {
        // todo implement
        return null;
    }


}
