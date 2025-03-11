<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    // REVIEW
    public function ShowReview()
    {
        $reviews = Review::orderBy('rating', 'desc')->get();
        return view('admin.pages.show_review', compact('reviews'));
    }

    public function Set_Active_review($id)
    {

        Review::where('id', $id)->update(['status' => 1]);

        Session::flash('success', 'Thiết lập hiển thị thành công!');
        return Redirect('show-review');
    }
    public function Set_UnActive_review($id)
    {

        Review::where('id', $id)->update(['status' => 0]);

        Session::flash('success', 'Thiết lập ẩn thành công!');
        return Redirect('show-review');
    }
    public function DeleteReview($id)
    {
        Review::where('id', $id)->delete();
        Session::flash('success', 'Xóa đánh giá thành công!');
        return Redirect('show-review');
    }
}
