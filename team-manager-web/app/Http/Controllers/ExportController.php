<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\Exports\TeamExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new TeamExport(), 'team.xlsx');
    }
}
