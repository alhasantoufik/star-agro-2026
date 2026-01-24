<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\WebsiteSetting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage()
    {
        $pageTitle = 'Contact Us';
        $website_setting = WebsiteSetting::select(['id', 'phone', 'website_title', 'email', 'address','website_title','website_logo','website_footer_logo','footer_content'])->first();
        return view('website.layouts.pages.contact.contact', compact([
            'pageTitle','website_setting',
        ]));
    }

    public function contactForm(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',

            'message' => 'required|string|max:1000',
        ]);

        Contact::create([
            'name'    => $request->name,
            'phone'   => $request->phone,
            'message' => $request->message,
        ]);

         

        return redirect()->back()->with('success', 'Application submitted successfully!');

    }

}
