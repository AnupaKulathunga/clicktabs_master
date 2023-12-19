<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgencyBranchRequest;
use App\Models\AgencyBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class AgencyBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $companyId = '0';
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $companyId = Auth::user()->organization_id;
                $organizations = Auth::user()->organization_id;
        }
        $addonAgencyBranches = AgencyBranch::where('company_id', $companyId)->get();
        return view('addons.agency.dashboard', compact('addonAgencyBranches', 'organizations'));
    }


    public function check_addons(Request $request){
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = $request->organisation_id;

        }

        $addonAgencyBranches = AgencyBranch::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.agency.sub_dashboard', compact('addonAgencyBranches', 'organizations', 'name'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = Auth::user()->organization_id;
        }
        return view('addons.agency.create', compact('organizations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgencyBranchRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            AgencyBranch::create($validated);
            return redirect()->route('agency.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgencyBranch  $agencyBranch
     * @return \Illuminate\Http\Response
     */
    public function show(AgencyBranch $agencyBranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgencyBranch  $agencyBranch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addon_id = decrypt($id);
        $addonAgencyBranch = AgencyBranch::where('id', $addon_id)->first();
        return view('addons.agency.edit', compact('addonAgencyBranch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgencyBranch  $agencyBranch
     * @return \Illuminate\Http\Response
     */
    public function update(AgencyBranchRequest $agencyBranch)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonAgencyBranch = AgencyBranch::where('id', $addon_id)->first();

            $addonAgencyBranch->name = request('name');
            $addonAgencyBranch->reference_code = request('reference_code');
            $addonAgencyBranch->save();

            return redirect()->route('agency.index')->with('success', 'Success. '. request('name') . ' was updated successfully. ');;
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgencyBranch  $agencyBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgencyBranch $agencyBranch)
    {
        //
    }

    public function change_status(Request $req, AgencyBranch $agencyBranch)
    {
        $agencyBranchId = decrypt($req->agencyBranchId);

        $outcome = $agencyBranch->changeStatus($agencyBranchId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
