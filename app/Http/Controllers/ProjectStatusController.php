<?php

namespace App\Http\Controllers;

use App\Models\ProjectStatus;
use Illuminate\Http\Request;

class ProjectStatusController extends Controller
{
    public function addstatus(Request $request)
    {
        $roles = implode($request->roles);
        $status = new ProjectStatus;
        $status->NameStatusProekt = $request->name;
        $status->NumberStatus = $request->status_num;
        $status->AccessStatus = $roles;
        $status->save();
        return back();
    }
    public function editstatus(Request $request, ProjectStatus $status)
    {
        $roles = implode($request->roles);
        $status->NameStatusProekt = $request->name ?? $status->NameStatusProekt;
        $status->NumberStatus = $request->status_num ?? $status->NumberStatus;
        $status->AccessStatus = $roles ?? $status->AccessStatus;
        $status->save();
        return back();
    }
}
