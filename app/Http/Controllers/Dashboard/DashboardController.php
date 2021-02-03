<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index()
    {
        return view("Dashboard.dashboard");
    }
    public function UserOnline()
    {
        return view("User.online");
    }
}
