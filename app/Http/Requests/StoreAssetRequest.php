<?php

namespace App\Http\Requests;

use App\Models\Asset;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAssetRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('asset_create');
    }

    public function rules()
    {
        return [
            'category_id' => [
                'required',
                'integer',
            ],
            'make' => [
                'string',
                'nullable',
            ],
            'model' => [
                'string',
                'nullable',
            ],
            'year' => [
                'string',
                'nullable',
            ],
            'color' => [
                'string',
                'nullable',
            ],
            'name' => [
                'string',
                'required',
            ],
            'photos' => [
                'array',
            ],
            'amenities.*' => [
                'integer',
            ],
            'amenities' => [
                'array',
            ],
        ];
    }
}
