<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;


class AdminController extends Controller
{
    public function Admin(){
        $id = Auth::id();
        $course = Course::where('status',0)->paginate(9);
        $draft = Course::where('status',1)->paginate(9);
        return view('admin.home_admin',compact('course','draft'));
    }
    public function getuser(Request $request){
        $user = User::where('latitude','!=',null)->whereIn('category_id',$request->id)->get();
        return json_encode($user);
    }
    public function index(){
        $user = User::where('latitude','!=',null)->get();

        return view('admin.index',compact('user'));
    }
    public function category(Request $request){
        if ($request->ajax()) {
            $data = Category::where('status',1)->select('id','name','created_at')->get();
            return Datatables::of($data)->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                if($row->created_at){
                    return $row->created_at->format('Y-m-d'); // human readable format

                }else{
                    return "2022-04-01";
                }
              })
              ->addColumn('action', function ($row) {
                $actionBtn = '<div  data-id=' . $row->id . '  class="edit-modal btn btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </div> <div class="delete-modal btn  btn-sm" data-id=' . $row->id . '  id="deletecategory" name='.$row->name.'><i class="fa fa-trash" aria-hidden="true"></i></div> ';
                return $actionBtn;
            })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.category');
    }
    public function addCategory(Request $request){
        $data = new Category();
        $data->name = $request->name;
        $data->status =1;
        $data->save();
        return redirect('/admin/category/list')->with('success',"Category added successfully");
    }
    function deleteCategory(Request $request)
    {
        $user = Category::where('id',$request->id)->update(['status'=>0]);
        echo "Category Deleted Successfully";
    }
    public function editCategory(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Category::where($where)->first();
      
        return Response()->json($company);
    }
    public function updateCategory(Request $request){
        $data = Category::where('id',$request->id)->first();
        $data->name = $request->name;
        $data->status = 1;
        $data->save();
        return redirect('/admin/category/list')->with('success',"Category Updated successfully");
    }
    public function mediaPlayer(Request $request,$id){
         $data = Lesson::where('id',$id)->first();
         return view('admin.player',compact('data'));
    }
    public function Authontication(Request $request,$id){
dd(Auth::user());
        $profile_path = public_path('storage/course'. $id);

        if (Auth::user()) {
            return response()->file($profile_path);
        } else {
            abort(404);
        }
    }
}
