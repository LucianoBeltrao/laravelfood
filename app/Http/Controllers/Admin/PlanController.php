<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function __construct(Plan $plan)
    {

    }

    public function index()
    {
        return view('admin.pages.plans.index');
    }
}