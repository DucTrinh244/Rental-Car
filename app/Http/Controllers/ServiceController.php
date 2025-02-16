<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ServiceController extends Controller
{
    public function ShowServices()
    {
        $services =service::get();

        return view('admin.services.show_service',compact('services'));
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
        $data = service::where('id', $id)->first();
        $data->service_name = $request->service_name;
        $data->description = $request->service_desc;
        $data->status = (int)$request->category_status;

        $data->save();

        Session::flash('success', 'Cập nhật dịch vụ thành công!');

        return redirect('services');
    }
}
