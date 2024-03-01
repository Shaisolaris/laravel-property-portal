<?php

namespace Modules\Admin\app\Services;

use App\Models\Country;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Modules\Admin\app\Http\Requests\Country\CountryIndexRequest;
use Modules\Admin\app\Http\Requests\Country\CountrySaveRequest;

class CountryService
{
    public function getList(CountryIndexRequest $request)
    {


        $query = Country::query();

        if($request->search) {
            $query->where(function ($query) use ($request) {
                /** @var Builder $query */
                $query->orWhere('code', $request->search);
                $query->orWhere('name', 'ilike', "%{$request->search}%");
                $query->orWhere('local_name', 'ilike', "%{$request->search}%");
            });
        }

        $query->orderBy('id');

        return $query->paginate();

    }


    public function createCountry(CountrySaveRequest $request): Country
    {
        /** @var Country $country */
        $country = Country::make();

        $country = $this->updateCountry($country, $request);

        return $country;
    }

    public function updateCountry(Country $country, CountrySaveRequest $request): Country
    {

        $country->fill($request->validated());
        $country->code = Str::upper($country->code);

        $country->save();

        return $country;
    }

    public function setFree(Country $country, bool $value): void
    {
        $country->is_free = $value;
        $country->save();
    }

    public function setActive(Country $country, bool $value): void
    {
        $country->is_active = $value;
        $country->save();
    }


}
