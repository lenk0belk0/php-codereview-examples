<?php

namespace App\Services;

class SomeClass
{
    public string $data;

    public function __construct(string $initialData)
    {
        $this->data = $initialData;
    }

    public function manipulateData(string $operation, string $value): void
    {
        if ($operation === 'add') {
            $this->data .= $value;
        }
    }

    public function manipulateString(string $str): string
    {
        return strtoupper($str);
    }

    public function asString(): string
    {
        return $this->data;
    }
}
