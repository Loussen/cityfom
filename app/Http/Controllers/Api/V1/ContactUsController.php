<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\UserResource;
use App\Mail\AppMail;
use App\Models\AppUsers;
use App\Models\Configs;
use App\Models\ContactUs;
use App\Models\EmailTemplates;
use Cake\Network\Email\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ContactUsController extends ApiController
{
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|string|email',
            'subject' => 'required|string|min:3|max:40',
            'message' => 'required|string|min:3',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $contactData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ];

        ContactUs::create($contactData);

        $adminEmail = Configs::where('slug', 'AdminEmail')->first();

        if($adminEmail) {
            $emailTemplate = EmailTemplates::where('slug', 'contact_us')->first();

            if($emailTemplate) {
                $language = $validatedData['language'];
                $emailDetails = [
                    'title' => $emailTemplate->{'subject_' . $language} ?? $emailTemplate->subject_en,
                    'body' => $emailTemplate->{'content_' . $language} ?? $emailTemplate->content_en
                ];

                $emailDetails['body'] = str_replace(array('{name}', '{email}', '{subject}', '{message}'), array($validatedData['name'], $validatedData['email'], $validatedData['subject'], $validatedData['message']), $emailDetails['body']);

                Mail::to($adminEmail->value)->send(new AppMail($emailDetails));
            }

            return $this->successResponse(null);
        }

        return $this->errorResponse("Message not send", 503);
    }

}
