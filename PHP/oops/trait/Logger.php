<?php

namespace App;

trait Logger
{
    public function log(string $message): string
    {
        return "LOG: " . $message;
    }
}