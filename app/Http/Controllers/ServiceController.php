<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{
    public function ShowServices()
    {
        $services = service::get();

        return view('admin.services.show_service', compact('services'));
    }
    public function AddServices()
    {

        return view('admin.services.add_service');
    }
    public function AddServicesAction(Request $request)
    {

        $data = new service();
        $data->service_name = $request->service_name;
        $data->description = $request->service_desc;
        $data->status = (int)$request->category_status;

        if ($request->category_image == '') {
            $data->image = '';
        } else {
            $get_image = $request->file('category_image');
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('public/uploads/services', $new_image);
                $data->image = 'public/uploads/services/' . $new_image;
            }
        }
        $data->save();

        Session::flash('success', 'Thêm dịch vụ thành công!');

        return redirect('add-services');
    }
    public function Set_Active_service($id)
    {

        service::where('id', $id)->update(['status' => 1]);

        Session::flash('success', 'Thiết lập hiển thị thành công!');
        return Redirect('services');
    }
    public function Set_UnActive_service($id)
    {

        service::where('id', $id)->update(['status' => 0]);

        Session::flash('success', 'Thiết lập ẩn thành công!');
        return Redirect('services');
    }
    public function DeleteService($id)
    {
        service::where('id', $id)->delete();

        Session::flash('success', 'Xóa dịch vụ thành công!');
        return Redirect('services');
    }
    public function EditService($id)
    {
        $service = service::where('id', $id)->first();

        return view('admin.services.update_service', compact('service'));
    }
    public function EditServiceAction(Request $request, $id)
    {
        $data = service::findOrFail($id);

        $data->service_name = $request->service_name;
        $data->description = $request->service_desc;
        $data->status = (int)$request->category_status;

        if ($request->hasFile('category_image')) {
            $get_image = $request->file('category_image');
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('uploads/services'), $new_image);
            if ($data->image && file_exists(public_path($data->image))) {
                unlink(public_path($data->image));
            }
            $data->image = 'public/uploads/services/' . $new_image;
        }

        $data->save();

        Session::flash('success', 'Cập nhật dịch vụ thành công!');
        return redirect('services');
    }
}
