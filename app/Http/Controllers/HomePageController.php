<?php

namespace App\Http\Controllers;

use App\Company;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends Controller
{
    public function landing()
    {
        return view('welcome');
    }

    public function index()
    {
        abort_if(Gate::denies('category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('mainTable.index');
    }

    public function table(Request $request)
    {
        $companies = Company::filterByRequest($request)->paginate(9);

        return view('mainTable.search', compact('companies'));
    }

    public function category(Category $category)
    {
        $companies = Company::join('category_company', 'companies.id', '=', 'category_company.company_id')
            ->where('category_id', $category->id)
            ->paginate(9);

        return view('mainTable.category', compact('companies', 'category'));
    }

    public function company(Company $company)
    {
        return view('mainTable.company', compact('company'));
    }
}
