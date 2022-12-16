<?php

namespace Modules\FundingPartner\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\FundingPartner\Entities\FundingPartner;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class FundingPartnerController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $fundingPartners = FundingPartner::orderBy('created_at', 'ASC')->paginate(100);
        return view('fundingpartner::index', compact('fundingPartners'));
    }

    public function create()
    {
        return view('fundingpartner::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'logo' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
            'partner_type'=>'required',
        ]);
        try {
            $fundingPartner = new FundingPartner();
            $fundingPartner->title = $request->title;
            $fundingPartner->partner_type = $request->partner_type;
            $fundingPartner->website_link = $request->website_link;
            $fundingPartner->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('logo')) {
                $file = $request->logo;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/fundingPartner', $filename);
                $fundingPartner->logo = $path;
            }
            $fundingPartner->save();
            return redirect()->route('FundingPartner.index')->with('success', 'FundingPartner created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $fundingPartners = FundingPartner::findOrFail($id);
        return view('fundingpartner::edit', compact('fundingPartners'));
    }

    public function update(Request $request, $id)
    {
        $fundingPartner = FundingPartner::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:150',
            'logo' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
        ]);
        try {
            $fundingPartner->title = $request->title;
            $fundingPartner->partner_type = $request->partner_type?$request->partner_type:$fundingPartner->partner_type;
            $fundingPartner->website_link = $request->website_link;
            $fundingPartner->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('logo')) {
                $file = $request->logo;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/fundingPartner', $filename);
                $fundingPartner->logo = $path;
            }

            $fundingPartner->save();
            return redirect()->route('FundingPartner.index')->with('success', 'FundingPartner updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $fundingPartner = FundingPartner::findOrFail($id);
        $fundingPartner->delete();
        return redirect()->route('FundingPartner.index')->with('success', 'FundingPartner deleted successfully');
    }
}
