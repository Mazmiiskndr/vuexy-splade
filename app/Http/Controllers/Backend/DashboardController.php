<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;

class DashboardController extends Controller
{
    public function index()
    {
        SEO::title('Dashboard')
        ->description('Laravel Splade SEO Package')
        ->keywords('Laravel Splade');
        return view('backend.main.dashboard');
    }
}
