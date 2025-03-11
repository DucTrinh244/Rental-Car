<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Review;
use App\Models\User;
use App\Models\Images;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function ShowHome()
    {

        $services = Service::where('status', 1)->get();
        $review = Review::where('status', 1)->get();
        $user = User::first();
        $images = Images::all();
        if (!$user) {
            $user = new User();
            $user->name = 'Họ Tên';
            $user->email = 'email@gmail.com';
            $user->phone_number = '0123456789';
            $user->address = 'chưa được cập nhật';
            $user->url_youtube = 'null';
        }
        return view('pages/home', compact('services', 'user', 'review', 'images'));
    }
    public function ShowAbout()
    {
        $user = User::first();
        $image_about = Images::where('page_name', 'about')->first();
        $image_home_sld_3 = Images::where('page_name', 'home_sld_3')->first();
        $image_home_me = Images::where('page_name', 'home_me')->first();

        if (!$user) {
            $user = new User();
            $user->name = 'Họ Tên';
            $user->email = 'email@gmail.com';
            $user->phone_number = '0123456789';
            $user->address = 'chưa được cập nhật';
            $user->url_youtube = 'null';
        }
        $review = Review::where('status', 1)->get();

        return view('pages/about', compact('user', 'review', 'image_about', 'image_home_me', 'image_home_sld_3'));
    }
    public function ShowServices()
    {
        $image_service = Images::where('page_name', 'service')->first();
        $services = Service::where('status', 1)->get();
        $user = User::first();
        if (!$user) {
            $user = new User();
            $user->name = 'Họ Tên';
            $user->email = 'email@gmail.com';
            $user->phone_number = '0123456789';
            $user->address = 'chưa được cập nhật';
        }
        return view('pages/services', compact('services', 'user', 'image_service'));
    }
    public function ShowServiceDetail($id)
    {
        $image_service = Images::where('page_name', 'service')->first();
        $services = Service::where('status', 1)->get();
        $service_detail = Service::where('id', $id)->where('status', 1)->first();
        if (!$service_detail) {
            return redirect('show-services');
        }

        $user = User::first();
        if (!$user) {
            $user = new User();
            $user->name = 'Họ Tên';
            $user->email = 'email@gmail.com';
            $user->phone_number = '0123456789';
            $user->address = 'chưa được cập nhật';
        }

        return view('pages/services_detail', compact('service_detail', 'services', 'user', 'image_service'));
    }
    public function ShowContact()
    {
        $image_contact = Images::where('page_name', 'contact')->first();
        $user = User::first();
        if (!$user) {
            $user = new User();
            $user->name = 'Họ Tên';
            $user->email = 'email@gmail.com';
            $user->phone_number = '0123456789';
            $user->address = 'chưa được cập nhật';
        }
        return view('pages/contact', compact('user', 'image_contact'));
    }
    public function ShowReview()
    {
        $user = User::first();
        if (!$user) {
            $user = new User();
            $user->name = 'Họ Tên';
            $user->email = 'email@gmail.com';
            $user->phone_number = '0123456789';
            $user->address = 'chưa được cập nhật';
        }
        return view('pages.review', compact('user'));
    }
    public function ReviewStore(Request $request)
    {
        $review = new Review();
        $review->name = $request->name;
        $review->email = $request->email;
        $review->comment = $request->comment;
        $review->rating = $request->rating;
        $review->save();

        return response()->json([
            'success' => true,
            'message' => 'Cảm ơn bạn đã đánh giá!'
        ]);
    }
    public function sendEmail(Request $request)
    {
        // Xác thực dữ liệu từ form
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|numeric',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Chuẩn bị dữ liệu cho email
        $details = [
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'phone'   => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ];

        // Lấy email nhận, nếu không có user nào thì đặt email mặc định
        $user = User::first();
        $recipientEmail = $user ? $user->email : 'hoangductrinh2k5@gmail.com';

        try {
            // Gửi email
            Mail::to($recipientEmail)->send(new ContactMail($details));

            return response()->json([
                'success' => true,
                'message' => 'Tin nhắn của bạn đã được gửi thành công!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Không thể gửi email. Vui lòng thử lại!',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
