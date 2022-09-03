<?php

namespace App\Http\Controllers\Testmodel;

use App\Services\Testmodel\Service;
use App\Http\Controllers\Controller;


class BaseController extends Controller {
   public $service;

   public function __construct(Service $service) {
      $this->service = $service;

   }
}