<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Article;
use App\Admin;
use App\User;
use App\TrainingCenter;
use Illuminate\Support\Facades\DB;

class viewController extends Controller
{
    public function index(){
        $users = User::count();
        $articles = Article::count();
        $contacts = Contact::count();
        return view('Admin.index', compact('users', 'articles', 'contacts'));
    }

    public function article(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(2);
        return view('Admin.viewArticle', compact('articles'));
    }

    public function admin(){
        $admins = Admin::all();
        return view('Admin.viewAdmin', compact('admins'));
    }

    public function user(){
        $users = User::all();
        return view('Admin.viewUser', compact('users'));
    }

    public function center(){
        $centers = TrainingCenter::all();
        return view('Admin.viewCenter', compact('centers'));
    }

    public function service(){
        $services = DB::table('training_centers')
            ->join('services', 'training_centers.center_id', '=', 'services.center_id')
            ->select('training_centers.center_name', 'services.*')
            ->get();
        return view('Admin.viewService', compact('services'));
    }

}
