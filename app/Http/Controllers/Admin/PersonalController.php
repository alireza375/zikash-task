<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Services\PersonalService;
use App\Http\Requests\Admin\PersonalRequest;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    private $personalService;
     public function __construct(PersonalService $personalService)
    {
        $this->personalService = $personalService;
    }

    public function AllPersonal()
    {
        return $this->personalService->index();

    }

    public function AddPersonal()
    {

        return view('backend.personal.add_personal');
    }

    public function StorePersonal(PersonalRequest $request)
    {
        // return $this->personalService->store($request);
    }



    

       
}
