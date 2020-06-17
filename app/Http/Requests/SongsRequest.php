<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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

            'name' => 'required|string|',
            'about_song' => 'required|string|min:20',
            'about_artist' => 'required|string|min:20',
            'artist' => 'required|string|',
            'cover_image' => 'required|',
            'song' => 'required',


        ];
    }
}