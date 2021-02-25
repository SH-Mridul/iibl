<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyCorporateController extends Controller
{
    public $viewPath = "backend/vueComponent/AboutUs/keyCorporate"; 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view($this->viewPath.'/index');
    }

    public function list(Request $request)
    {
        $currentpage = $_GET['currentpage'];
        $limit = $_GET['limit'];
        $search = $_GET['search'];
        $skip = ($_GET['currentpage'] - 1) * $_GET['limit'];

        $results = DB::table('key_corporate')->skip($skip)->take($limit)->orderBy('id', 'ASC')->get();
        $data['total'] = count(DB::table('key_corporate')->get());

        if($search != '')
        {
            $results = DB::table('key_corporate')
            ->where('english','like','%'.$search.'%')
            ->orWhere('bangla','like','%'.$search.'%')
            ->skip($skip)
            ->take($limit)
            ->orderBy('id', 'DESC')
            ->get();
            $data['total'] = count($results);
        }

        $data['pages'] = ceil($data['total'] / $limit);
        $data['currentpage'] = $currentpage;
        $data['search'] = $search;
        $data['records'] = $results;

        return view($this->viewPath.'/list',compact('data'));
    }

    public function add()
    {
        return view($this->viewPath.'/add');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $record = DB::table('key_corporate')->where('id',$id)->get()[0];
        return view($this->viewPath.'/edit',compact('record'));
    }

    public function storeOrUpdate(Request $request){
        // store data
        if($request->input('postType') == 'store'){
            DB::table('key_corporate')->insert(
            [
               'english' => $request->input('english'), 
               'bangla' => $request->input('bangla')
            ]);
            return "Data has been save successfully";
        }

        // update data
        if($request->input('postType') == 'update'){
            DB::table('key_corporate')
            ->where('id', $request->input('id'))
            ->update(
            [
               'english' => $request->input('english'), 
               'bangla' => $request->input('bangla')
            ]);
            return "Data has been update successfully";
        }
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        DB::table('key_corporate')->where('id', $id)->delete();
        return "Data has been delete successfully";
    }
}
