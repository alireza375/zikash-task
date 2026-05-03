<?php

namespace App\Http\Services;


use App\Models\Category;

class PersonalService
{
    // Category Index
   public function index()
{
    return view('backend.personal.personal_index');
}

   
}