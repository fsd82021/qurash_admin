<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactFormRequest;
use App\Http\Resources\Resource\ContactResource;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;

class ContactController extends BaseController
{
    public function formRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $data = $request->all();
        $success = Contact::create($data);
        return $this->sendResponse($success, 'تم ارسال الرسالة بنجاح');
    }
}
