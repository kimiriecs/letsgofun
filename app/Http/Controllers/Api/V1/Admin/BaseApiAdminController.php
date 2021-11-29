<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Api\V1\BaseApiVersionController as BaseApiVersionController;
use Illuminate\Http\Request;

/**
 *
 * Base controller for all Api Controllers for current version of api
 *
 */

abstract class BaseApiAdminController extends BaseApiVersionController
{
    public function __construct() {

        parent::__construct();

        // code...

    }
}
