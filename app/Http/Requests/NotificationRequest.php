<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return \App\Models\User::with('role')->find(auth()->id())->role->value == 'admin';
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (!$this->mode) {
            return ['mode' => 'required|in:add,update'];
        } else if ($this->mode == 'add') {
            return $this->add();
        } else {
            return $this->update();
        }
    }

    public function add()
    {
        return [
            'content' => 'required|string',
            'user_id' => 'nullable|exists:users,id',
            'type' => 'nullable|string|in:info,success,danger',
        ];
    }

    public function update()
    {
        return [];
    }
}
