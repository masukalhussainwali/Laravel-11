<?php

namespace App\Models;

use Illuminate\Support\Traits\Dumpable;

class TestDumpable
{
    use Dumpable;

    public $message;

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function addPrefix($prefix)
    {
        $this->message = $prefix . $this->message;
        return $this;
    }
}
