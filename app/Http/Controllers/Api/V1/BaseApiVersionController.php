<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\GlobalApiController as GlobalApiController;
use Illuminate\Http\Request;

/**
 *
 * Base controller for all Api Controllers for current version of api
 *
 */

abstract class BaseApiVersionController extends GlobalApiController
{
    public function __construct() {

        parent::__construct();

        // code...

    }
}
