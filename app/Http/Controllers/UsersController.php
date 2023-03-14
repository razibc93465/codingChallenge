<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function search(Request $request)
    {
        // dd($request->q);
        $q = $request->q;

        $items = DB::table('users')->where('email', 'like', '%' . $q . '%')
            ->orWhere('first_name', 'like', '%' . $q . '%')
            ->orWhere('last_name', 'like', '%' . $q . '%')
            ->select('uuid', DB::raw('CONCAT(first_name, \' \', last_name) AS name'))
            ->paginate(10);

        // dd($items);
        // DB::raw("SELECT student_id FROM results WHERE subject = 'English' ORDER BY mark DESC LIMIT 2, 1;");
        return response()->json([
            'items' => $items
        ]);
    }
}
