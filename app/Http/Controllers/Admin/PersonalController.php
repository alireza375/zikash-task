<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Services\PersonalService;
use App\Http\Requests\Admin\PersonalRequest;
use App\Models\Personals;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    private $personalService;
     public function __construct(PersonalService $personalService)
    {
        $this->personalService = $personalService;
    }

    public function AllPersonal(Request $request)
    {
        $personals = Personals::all();
        return view('backend.personal.personal_index', compact('personals'));

    }

    public function AddPersonal()
    {

        return view('backend.personal.add_personal');
    }

    public function StorePersonal(PersonalRequest $request)
    {
        return $this->personalService->store($request);
    }



    

       
}
