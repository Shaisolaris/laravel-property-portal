<?php

namespace Modules\Admin\app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Modules\Admin\app\Http\Requests\Country\CountryIndexRequest;
use Modules\Admin\app\Http\Requests\Country\CountrySaveRequest;
use Modules\Admin\app\Http\Requests\Country\CountrySetFreeRequest;
use Modules\Admin\app\Http\Resources\CountryResource;
use Modules\Admin\app\Services\CountryService;

class CountryController extends Controller
{
    public function __construct(protected CountryService $countryService)
    {
        parent::__construct();
    }

    public function index(CountryIndexRequest $request)
    {

        return Inertia::render('Admin::Countries/Index', [
            'countries' => CountryResource::collection($this->countryService->getList($request)),
            'filters' => $request->validated(),
        ]);
    }

    public function edit(Request $request, Country $country)
    {
        return Inertia::render('Admin::Countries/Edit', [
            'country' => CountryResource::make($country),
        ]);
    }

    public function create(Request $request)
    {
        return Inertia::render('Admin::Countries/Edit');
    }

    public function store(CountrySaveRequest $request)
    {
        $country = $this->countryService->createCountry($request);

        return Redirect::route('admin.country.edit', ['country' => $country])
            ->success('admin.page.country.create-success');
    }

    public function update(CountrySaveRequest $request, Country $country)
    {

        $this->countryService->updateCountry($country, $request);

        return Redirect::route('admin.country.edit', ['country' => $country])
            ->success('admin.page.country.save-success');
    }

    public function destroy(Request $request, Country $country)
    {
        $country->delete();

        return Redirect::back()->success('admin.page.country.delete-success');
    }

    public function setFree(CountrySetFreeRequest $request, Country $country)
    {
        $this->countryService->setFree($country, $request->value);

        return Redirect::back()->success('admin.page.country.save-success');
    }

    public function setActive(CountrySetFreeRequest $request, Country $country)
    {
        $this->countryService->setActive($country, $request->value);

        return Redirect::back()->success('admin.page.country.save-success');
    }

}
