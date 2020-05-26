<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrip extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //Temporarily authorize an admin to create trips
        //return $this->user()->driver_id;
        //return $this->user()->driver_id == null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'duration_hours' => 'required|numeric|min:1',
            'destination' => 'required',
            'due_date' => 'required|date|after_or_equal:today',
            'vehicle_id' => 'required|exists:vehicles,id'
        ];
    }
}
