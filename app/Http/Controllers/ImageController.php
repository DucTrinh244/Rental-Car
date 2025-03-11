<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\Session;

class ImageController extends Controller
{
    public function ShowImages()
    {
        $images = Images::all();
        return view('admin.images.show_image', compact('images'));
    }
    public function AddImages()
    {
        if (Images::count() < 9) {
            return view('admin.images.add_image');
        }
        Session::flash('error', 'Tất cả hình ảnh đã được thêm !');
        return redirect('show-images');
    }
    public function AddImagesAction(Request $request)
    {
        $data = new Images();
        $data->page_name = $request->page_name;
        if ($request->image_path == '') {
            $data->image_path = '';
        } else {
            $get_image = $request->file('image_path');
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('public/uploads/images', $new_image);
                $data->image_path = 'public/uploads/images/' . $new_image;
            }
        }
        $data->save();

        Session::flash('success', 'Thêm hình ảnh thành công!');
        return redirect('add-images');
    }
    public function DeleteImage($id)
    {
        Images::where('id', $id)->delete();
        Session::flash('success', 'Xóa hình ảnh thành công!');
        return redirect('show-images');
    }
}
