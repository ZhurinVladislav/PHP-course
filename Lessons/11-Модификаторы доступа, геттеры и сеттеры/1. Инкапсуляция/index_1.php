<?php

class Bank
{
    private $accounts = [];
    private $corrAccount;
    private $bankCode;

    public function __construct($corrAccount, $bankCode)
    {
        $this->corrAccount = $corrAccount;
        $this->bankCode = $bankCode;
    }

    public function createAccount($accNumber)
    {
        $this->accounts[] = $accNumber;
    }

    public function showAccountsList()
    {
        print_r($this->accounts);
    }
}

$sberBank = new Bank('7864543298769834', 'SB736');
$sberBank->createAccount('786452342359834');
$sberBank->createAccount('432452352352344');
// $sberBank->showAccountsList();

$alfaBank = new Bank('12312431241254123', 'AL981');
$alfaBank->createAccount('1231241245154124');
$alfaBank->createAccount('2354325235324324');

// $alfaBank->corrAccount = '7864543298769834';
