<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function addcategory(Request $request)
    {
        $category = new ProjectCategory;
        $category->NameCategory = $request->name;
        return back();
    }

    public function editcategory(Request $request, ProjectCategory $category) {
        $category->NameCategory = $request->name ?? $category->name;
        return back();
    }
}
