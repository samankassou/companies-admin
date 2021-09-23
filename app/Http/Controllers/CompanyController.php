<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()
        ->withCount('employees')
        ->paginate(10);

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
        ];

        if($request->hasFile('logo'))
        {
            $logoPath = $request->file('logo')
            ->store('logos', 'public');
            $data['logo'] = $logoPath;
        }

        Company::create($data);

        return redirect()
        ->route('companies.index')
        ->with([
            'success' => true,
            'message' => 'Company created succesfully.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company->loadCount('employees');
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
        ];

        // if the user uploaded a new logo
        if($request->hasFile('logo'))
        {
            // if the company already has a logo
            if($company->logo)
            {
                // delete the old logo
                Storage::disk('public')->delete($company->logo);
            }
            
            // save the new logo
            $logoPath = $request->file('logo')
            ->store('logos', 'public');
            $data['logo'] = $logoPath;
        }

        $company->update($data);

        return redirect()
        ->route('companies.index')
        ->with([
            'success' => true,
            'message' => 'Company updated succesfully.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
         // if the company has a logo
        if($company->logo)
        {
            // delete the file
            Storage::disk('public')->delete($company->logo);
        }
        $company->delete();
        return back()
        ->with([
            'success' => true,
            'message' => 'Company deleted succesfully.'
        ]);
    }
}
