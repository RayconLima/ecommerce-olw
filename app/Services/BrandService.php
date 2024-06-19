<?php

namespace App\Services;

use App\Models\Brand;
use App\Http\Requests\Brand\{BrandStoreRequest, BrandUpdateRequest};

class BrandService
{
    public function list()
    {
        $brands = Brand::paginate();

        return $brands;
    }

    public function store(BrandStoreRequest $request) {
        $brand = Brand::create($request->validated());

        return $brand;
    }

    public function update(BrandUpdateRequest $request, Brand $brand) {
        $brand->update($request->validated());

        return $brand;
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
    }
}