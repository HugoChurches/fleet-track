<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTrip extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Temporarily allow access
        return true;
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
            'duration_hours' => 'required|numeric',
            'destination' => 'required|string',
            'due_date' => 'required',
            'trip_notes' => 'nullable',
            'pocket_expenses' => 'nullable|numeric|min:0',
            'late_fee' => 'required|numeric|min:0',
            'bonus' => 'nullable|numeric|min:0',
            'pay_rate' => 'nullable|numeric|min:0',
        ];
    }
}
