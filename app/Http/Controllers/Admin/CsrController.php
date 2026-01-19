<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CSR;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Laravel\Facades\Image;

class CsrController extends Controller
{
    public function index()
    {
        $banner = CSR::first();
        return view('admin.layouts.pages.csr.index', compact('banner'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:250',
        ]);

        $banner  = CSR::first();
        $newImage = $this->bannerImage($request);
        if ($newImage) {
            $oldImagePath = public_path($banner->image);
            if ($banner->image && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            $banner->image = $newImage;
        }

        $banner->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'image' => $banner->image,
            'button_name' => $request->button_name,
            'button_url' => $request->button_url,
        ]);

        Toastr::success('CSR updated successfully.');
        return redirect()->back();
    }


    private function bannerImage(Request $request)
    {
        if ($request->hasFile('image')) {

            $image = Image::read($request->file('image'));

            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();

            $destinationPath = public_path('uploads/csr_image');

            // ✅ Ensure directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $image->save($destinationPath . '/' . $imageName);

            return 'uploads/csr_image/' . $imageName;
        }

        return null;
    }
}
