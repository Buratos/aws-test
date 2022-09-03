<?php

namespace App\Services\Testmodel;

use App\Models\Testmodel;

class Service {
   public function index($input_data) {
      $data = Testmodel::find(1);
      $data->name = $input_data["name"];
      $data->age = $input_data["age"];

      return $data;
   }
}