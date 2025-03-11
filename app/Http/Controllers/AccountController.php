<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function ShowAccount()
    {
        $user = User::first();
        return view('admin.Account.show_account', compact('user'));
    }
    public function UpdateAccount()
    {
        $user = User::first();
        return view('admin.Account.update_account', compact('user'));
    }
    public function EditAccount(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->url_facebook = $request->url_facebook;
        $data->address = $request->address;
        $data->logo = $request->logo;
        $data->url_youtube = $request->url_youtube;

        if ($request->hasFile('image_url')) {
            $get_image = $request->file('image_url');
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('uploads/account'), $new_image);
            if ($data->image_url && file_exists(public_path($data->image_url))) {
                unlink(public_path($data->image_url));
            }
            $data->image_url = 'public/uploads/account/' . $new_image;
        }

        $data->save();

        Session::flash('success', 'Cập nhật tài khoản thành công!');
        return redirect('show-account');
    }
}
