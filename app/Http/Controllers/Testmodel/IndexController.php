<?php

namespace App\Http\Controllers\Testmodel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Testmodel\IndexRequest;
use Illuminate\Http\Request;

class IndexController extends BaseController {
   public function __invoke(IndexRequest $request) {
      $input_data = $request->validated();

      $data = $this->service->index($input_data);

      return view("Testmodel.index",["data"=>$data]);

   }
}
