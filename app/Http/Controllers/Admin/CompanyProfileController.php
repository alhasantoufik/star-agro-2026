<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyProfileController extends Controller
{
    /**
     * Show company profile
     */
    public function companyProfile()
    {
        $profile = CompanyProfile::select([
            'id',
            'title',
            'sub_title',     
            'description',
            'file',
            'is_active'
        ])->first();

        return view(
            'admin.layouts.pages.companyProfile.company_profile',
            compact('profile')
        );
    }

    /**
     * Update company profile
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'string',
            'sub_title' => 'nullable|string',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,xlsx,xls,doc,docx,jpg,jpeg,png',
            'is_active' => 'nullable|boolean',
        ]);

        $profile = CompanyProfile::findOrFail($id);

        // Update text
        $profile->description = $request->description;

        // File upload to public/uploads/profile_files
        if ($request->hasFile('file')) {

            $uploadPath = public_path('uploads/profile_files');

            // folder না থাকলে create করবে
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            // old file delete
            if ($profile->file && File::exists(public_path($profile->file))) {
                File::delete(public_path($profile->file));
            }

            $file = $request->file('file');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            $file->move($uploadPath, $fileName);

            // database এ relative path save হবে
            $profile->file = 'uploads/profile_files/' . $fileName;
        }

        // Active status
        $profile->is_active = $request->has('is_active') ? 1 : 0;

        $profile->save();

        $toast = Toastr();
        $toast->success('Company profile updated successfully.');

        return back();
    }
}
