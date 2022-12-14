<?php

namespace App\Actions;

use Exception;

abstract class Actionable
{
    abstract public function handle();

    /**
     * @throws Exception
     *
     * @see static::handle()
     */
    public static function run(...$arguments)
    {
        return app(static::class)->handle(...$arguments);
    }
}
