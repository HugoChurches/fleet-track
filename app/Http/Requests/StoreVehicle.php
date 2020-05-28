<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return $this->user()->driver_id == null;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'make' => 'required',
            'model' => 'required',
            'color' => 'required',
            'engine_number' => 'required',
            'location' => 'required',
            'year' => 'required|numeric|min:1950',
            'mileage' => 'required|numeric|min:0',
            'next_service' => 'required|date|after_or_equal:today',
        ];
    }
}
