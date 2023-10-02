<?php

class Account {
    private $name;
    private $surname;
    private $ID;
    private $balance;
    private $active;

    public function __construct($name, $surname, $ID, $balance, $active) {
        $this->name = $name;
        $this->surname = $surname;
        $this->ID = $ID;
        $this->balance = $balance;
        $this->active = $active;
    }

    public function updateCustomerData($name, $surname, $ID) {
        $this->name = $name;
        $this->surname = $surname;
        $this->ID = $ID;
    }

    public function makeDeposit($amount) {
        if ($this->active) {
            $this->balance += $amount;
            return "Deposit successful. Current balance: $" . $this->balance;
        } else {
            return "Account is blocked. Deposit not allowed.";
        }
    }

    public function makeWithdrawal($amount) {
        if ($this->active) {
            if ($this->balance >= $amount) {
                $this->balance -= $amount;
                return "Withdrawal successful. Current balance: $" . $this->balance;
            } else {
                return "Insufficient funds.";
            }
        } else {
            return "Account is blocked. Withdrawal not allowed.";
        }
    }

    public function checkBalance() {
        return "Current balance: $" . $this->balance;
    }

    public function blockAccount() {
        $this->active = false;
        return "Account blocked successfully.";
    }

    public function unblockAccount() {
        $this->active = true;
        return "Account unblocked successfully.";
    }

    public function showCustomerInformation() {
        return "Name: " . $this->name . " " . $this->surname . "<br>ID: " . $this->ID . "<br>Balance: $" . $this->balance . "<br>Active: " . ($this->active ? "Yes" : "No");
    }
}

// Example Usage
$account = new Account("John", "Doe", "123456789", 1000, true);
echo PHP_EOL;
echo $account->showCustomerInformation() . PHP_EOL;
echo $account->checkBalance() . PHP_EOL;
echo $account->makeDeposit(500) . PHP_EOL;
echo $account->makeWithdrawal(200) . PHP_EOL;
echo $account->blockAccount() . PHP_EOL;
echo $account->makeWithdrawal(300) . PHP_EOL; // Attempting withdrawal after blocking
echo $account->unblockAccount() . PHP_EOL;
echo $account->makeWithdrawal(300) . PHP_EOL; // Attempting withdrawal after unblocking
echo PHP_EOL;

//Update the App using a do/while loop and a switch to make an options menu with all the methods

?>
