<?php

namespace App\Http\Services;
use App\Models\Personal;

class PersonalService
{
    // Personal Index
   public function index()
{
    return view('backend.personal.personal_index');
}

    // public function store($request)
    // {
    //     try {

    //         $data = [
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'mobile_number' => $request->mobile_number,
    //             'gender' => $request->gender,
    //             'date_of_birth' => $request->date_of_birth,
    //             'education' => $request->education,
    //             'hobby' => $request->hobby, // assuming cast = array
    //             'office_start_time' => $request->office_start_time,
    //             'office_end_time' => $request->office_end_time,
    //             'present_address' => $request->present_address,
    //             'permanent_address' => $request->permanent_address,
    //         ];

    //         $personal = Personal::create($data);

    //         return [
    //             'status' => true,
    //             'message' => 'Personal added successfully',
    //             'data' => $personal
    //         ];

    //     } catch (\Exception $e) {

    //         return [
    //             'status' => false,
    //             'message' => $e->getMessage()
    //         ];
    //     }
    // }
        

   
}