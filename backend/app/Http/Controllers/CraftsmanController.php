<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CraftsmanResource;
use App\Models\Craftsman;
use Illuminate\Support\Facades\DB;

class CraftsmanController extends Controller
{
    public function index()
    {
        $craftsmanInfo = DB::select('select * from Craftsman JOIN users ON Craftsman.user_id = users.id');
        return $craftsmanInfo;
    }

    public function insert(Request $request)
    {
        // $userId = $request->input('user_id');
        $userId = 1;
        $title = $request->input('title');
        $body  = $request->input('body');
        $date  = date("Y-m-d");
        try {
            DB::insert('insert into Craftsman (user_id, craftsman_search_title, craftsman_search_body, insert_time) values (?, ?, ?, ?)', [$userId, $title, $body, $date]);
            $message = 'DB OK';
            $status = 200;
        } catch (\Exception $e) {
            $message = 'ERROR DB connection NG ';
            $status = 500;
        } finally {
            return response($message, $status);
        }
    }
}

// $data = [
//     'a' => $request->input('user_id'),
//     'b' => $request->input('craftsman_search_title'),
//     'c' => $request->input('craftsman_search_body')
// ];
