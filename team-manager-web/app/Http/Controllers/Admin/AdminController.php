<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

/**
 *  Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
class AdminController extends Controller{
    public function index() {
        $teams = DB::table('department')->join('team', 'department.department_id', '=', 'team.department_id')->select('*');
        $teams = $teams->get();
        $department = DB::table('department')->select('*');
        $department = $department->get();
        return view('/listOfTeam', compact('teams','department'));
    }
}