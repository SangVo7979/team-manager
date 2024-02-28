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

    public function addTeam() {
        $department = DB::table('department')->select('*');
        $department = $department->get();
        return view('/AddTeam', compact('department'));
    }

    public function AddDB(Request $request)
    {
        $User = DB::table('team')->insert([
            'team_id' => $request->team_id,
            'team_name' => $request->team_name,
            'department_id' => $request->department_id,
        ]);
        return redirect()->route('listOfTeam');
    }

    public function editTeam($id)
    {
        // try {
            $team = DB::table('team')->where('team_id',$id)->select('*');
            $team = $team->get();
            $department = DB::table('department')->select('*');
            $department = $department->get();
            return view('/EditTeam', compact('id','team','department'));
            // if ($slide == null) {
            //     return redirect()->route('Error404');
            // }
            // return view('Admin::SlidesManagement.slideDetail', [
            //     'status' => SlideStatus::toArray(),
            //     'slide' => $slide,
            //     'isInsert' => false,
            // ]);
        // } catch (\Exception $e) {
        //     return redirect()->route('ServerError', ["error" => $e->getMessage()]);
        // }
    }

    public function UpdateDB(Request $request,$id)
    {
        $User = DB::table('team')->where('team_id',$id)->Update([
            'team_id' => $request->team_id,
            'team_name' => $request->team_name,
            'department_id' => $request->department_id,
        ]);
        return redirect()->route('listOfTeam');
    }

    public function DeleteTeam($id)
    {
        $team = DB::table('team')->where('team_id',$id)->delete();
        return redirect()->route('listOfTeam');   
    }
}