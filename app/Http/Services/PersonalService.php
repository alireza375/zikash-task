<?php

namespace App\Http\Services;
use App\Models\Personals;
use Illuminate\Http\Request;

class PersonalService
{
    public function store(Request $request)
    {
        try {

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'education' => $request->education,
                'hobby' => $request->hobby, // assuming cast = array
                'office_start_time' => $request->office_start_time,
                'office_end_time' => $request->office_end_time,
                'present_address' => $request->present_address,
                'permanent_address' => $request->permanent_address,
            ];

            $personal = Personals::create($data);

           return redirect()->route('all.personal')
                 ->with('success', 'Personal added successfully');

        } catch (\Exception $e) {

            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
        

   
}