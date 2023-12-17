<?php

namespace App\Modules;


abstract class Test
{
    public $description;

    public function handle()
    {
        $this->observe(fn () => $this->run());
    }

    public function observe(callable $callBack)
    {
        try {
            $callBack();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    abstract public function run();
}
