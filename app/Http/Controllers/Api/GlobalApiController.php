<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as MainAppController;
use Illuminate\Http\Request;


/**
 *
 * Base controller for all Api Controllers for all versions of api
 *
 */

abstract class GlobalApiController extends MainAppController
{
    public function __construct() {

        parent::__construct();

        // code...

    }
}
