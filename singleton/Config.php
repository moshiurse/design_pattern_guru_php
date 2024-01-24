<?php

require_once './Singleton.php';
class Config extends Singleton{

    private $hashMap = [];

    public function getValue(string $key): string {
        return $this->hashMap[$key];
    }

    public function setValue(string $key, string $value): void {
        $this->hashMap[$key] = $value;
    }
}

