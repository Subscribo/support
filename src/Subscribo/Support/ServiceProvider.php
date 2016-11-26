<?php

namespace Subscribo\Support;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Subscribo\Support\Traits\EnhancedServiceProviderTrait;

/**
 * Class ServiceProvider
 * Extending Laravel Framework class fixing and providing some additional functionality
 *
 * @package Subscribo\Support
 */
abstract class ServiceProvider extends BaseServiceProvider
{
    use EnhancedServiceProviderTrait;

}
