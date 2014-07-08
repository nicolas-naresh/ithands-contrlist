<?php

namespace Ithands\Controlist\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Facade for Acl class.
 */
class Controlist extends Facade
{
  protected static function getFacadeAccessor() { return 'Controlist'; }
}