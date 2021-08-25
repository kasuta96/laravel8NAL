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
    
    // Lấy tất cả từ
    public function index () {

        // sử dụng Model Word
        $words = Word::All();
        return response()->json($words);
    }

    // Lấy 1 từ
    public function details($id)
    {
        try {
            // lấy 1 word từ DB bằng primary key (khóa chính)
            $word = Word::find($id);
            // Nếu tìm thấy từ có id như vậy
            if ($word) {
                return response()->json($word);
            }
            // Nếu không có -> trả lại status notFound
            else {
                return response()->json(
                    [
                        'status' => 'notFound'
                    ]
                );
            }
        } catch (\Throwable $th) {
            // trả lại status error nếu lỗi
            return response()->json(
                [
                    'status' => 'error'
                ]
            );
        }
    }

}
