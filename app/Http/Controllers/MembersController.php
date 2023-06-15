<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use App\Http\Requests\MembersRequest;
use App\DTO\MembersDTO;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param MembersRequest $request
     * @param MembersDTO $membersDTO
     * @return Members|array
     */
    public function create(MembersRequest $request, MembersDTO $membersDTO)
    {
        //
        $ArrayRequest = $request->toArray();

        $dtoData = $membersDTO->mapData($ArrayRequest);

        //create a new member with DTO data
       return Members::createMember($dtoData);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param Members $members
     */
    public function show(Members $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Members $members
     */
    public function edit(Members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Members $members
     */
    public function update(Request $request, Members $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param Members $members
     */
    public function destroy(Members $members)
    {
        //
    }
}
