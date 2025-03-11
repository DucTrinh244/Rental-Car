<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;
use App\Models\Service;
use App\Models\Images;
use App\Models\Review;

class AdminController extends Controller
{
    public function ShowDashboard()
    {
        $count_booking_year = Bookings::whereYear('created_at', date('Y'))->count();
        $count_service_active = Service::where('status', 1)->count();
        $count_images = Images::all()->count();
        if ($count_images < 9) {
            $status_image = 'Chưa hoàn thành';
        } else {
            $status_image = 'Đã hoàn thành';
        }
        $count_reviews = Review::where('status', 1)->count();

        return view(
            'admin.dashboard',
            compact(
                'count_booking_year',
                'count_service_active',
                'count_images',
                'status_image',
                'count_reviews'

            )
        );
    }
}
