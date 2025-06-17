<?php

class BankAccount {

    private $balance;
    private $accountNumber;
    function __construct($ac, $balance = 0) {
        $this->accountNumber = $ac;
        $this->balance = $balance;
    }

    function setAccountNumber($ac) {
        $this->accountNumber = $ac;
    }

    function deposit($amount) {
        $this->balance += $amount;
    }

    function widthdraw($amount) {
        if ($amount > $this->balance) {
            // throw new Exception('Insufficient balance');
            echo "Insufficient balance";
            return;
        }
        $this->balance -= $amount;
    }

    function getBalance() {
        return $this->balance;
    }
}

$johnsAccount = new BankAccount('12345', '15000');
$johnsAccount->deposit(2000);
$johnsAccount->widthdraw(10000);
$johnsAccount->widthdraw(10000);
echo $johnsAccount->getBalance();

echo PHP_EOL;
$hasinsAccount = new BankAccount('12345', '10000');
$hasinsAccount->deposit(2000);
$hasinsAccount->widthdraw(1000);
$hasinsAccount->widthdraw(10000);
echo $hasinsAccount->getBalance();