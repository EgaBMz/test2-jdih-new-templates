<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\surveygender;

class SurveyGenderController extends Controller
{
    public function index()
    {
        $data = surveygender::orderBy('created_at','DESC')->get();

        return view('admin.surveygender.index', [
            'data' => $data,
            'title' => 'Master Survey Gender',
        ]);
    }
}
