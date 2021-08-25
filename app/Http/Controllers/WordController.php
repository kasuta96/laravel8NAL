<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    // Nhận dữ liệu từ Request, lưu vào DB
    public function create(Request $new) 
    {
        // sử dụng try để xử lý hiển thị lỗi
        try {
            // lưu vào DB sử dụng hàm create() của laravel
            Word::create(
                [
                    'name' => $new->name,
                    'translation' => $new->translation
                ]
            );
            // trả lại status success (lưu thành công)
            return response()->json(
                [
                    'status' => 'success'
                ]
            );
        } catch (\Throwable $th) {
            //throw $th;

            // trả lại status error nếu lỗi
            return response()->json(
                [
                    'status' => 'error'
                ]
            );
        }
    }
}
