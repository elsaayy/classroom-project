<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $datas = Classes::get();
        $warna = ['bg-danger', 'bg-primary', 'bg-warning', 'bg-success', 'bg-secondary'];
        $random = Arr::random($warna);
        foreach ($datas as $data) {
            $student = User::where('class_id', $data->id)->count();
        }
        return view('dashboard.dashboard', ['datas' => $datas, 'random' => $random, 'student' => $student]);
    }
}
