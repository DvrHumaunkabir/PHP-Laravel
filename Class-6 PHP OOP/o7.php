<?php

class ExpenseTracker { //single responsibility principle
    private $balance;
    private $items = [];

    function setBalance($balance) {
        $this->balance = $balance;
    }

    function addExpense($note, $amount) {
        if ($amount > $this->balance) {
            // throw new Exception('Insufficient balance');
            echo "Insufficient balance";
            return;
        }
        $this->items[$note] = $amount;
        $this->balance -= $amount;
        // $this->items[$amount] = $note; //key
    }

    function showExpenses() {
        print_r($this->items);
    }

    function getBalance() {
        $_balance = $this->balance;
        // foreach ($this->items as $item => $amount) {
        //     $_balance -= $amount;
        // }

        return "balance: $_balance";
    }
}

$myExpenses = new ExpenseTracker();
$myExpenses->setBalance(5000);

$myExpenses->addExpense('chicken', 1000);
$myExpenses->addExpense('rice', 1000);
$myExpenses->addExpense('shirt', 2000);
$myExpenses->addExpense('perfume', 10000);

$myExpenses->showExpenses();
echo $myExpenses->getBalance();