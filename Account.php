<?php
class Account
{
    private int|float $balance;

    public function __construct(int|float $balance = 0)
    {
        $this->balance = $balance;
    }

    public function getBalance(): int|float
    {
        return $this->balance;
    }

    public function deposit(int|float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(int|float $amount): void
    {
        if ($amount > $this->balance) {
            echo "Insufficient funds\n";
            return;
        }
        $this->balance -= $amount;
    }
}
