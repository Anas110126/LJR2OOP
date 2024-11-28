<?php

class BankAccount
{
    public $balance;
    public $accountNumber;
    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }
    public function withdraw($amount)
    {
        $this->balance -= $amount;

    }
}

$account = new BankAccount(3000, 12345);
$account->setAccountNumber('12345');
$account->balance;
$account->deposit(400);
echo "Uw bankaccount nummer is " . $account->getAccountNumber() . "<br>";
echo "uw huidige saldo is " . $account->getBalance() . "<br>";
echo "U heeft" . $account->deposit(400);
echo $account->getBalance() . "<br>";
echo "U heeft" ;