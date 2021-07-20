<?php

namespace Config;

use Bonfire\Traits\Factory;

class Config
{
    use Factory;

    /**
     * --------------------------------------------------------------------------
     * Persist Config Values?
     * --------------------------------------------------------------------------
     *
     * If true, will allow storing of configuration values into the database
     * which will then be automatically filled in when calling `config('Foo')`.
     * If the value doesn't exist the original value from the configuration value
     * will still be used in its place.
     *
     * @var bool
     */
    public $persistConfig = true;

    /**
     * --------------------------------------------------------------------------
     * Configuration Table
     * --------------------------------------------------------------------------
     *
     * Specifies the name of the database table that will be used to store
     * configuration settings to. These values will then automatically be
     * retrieved when using the `config()` helper function, if
     * $this->persistConfig == true.
     *
     * @var string
     */
    public $configTable = 'ci_config';
}
