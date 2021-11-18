<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class EnrollmentPostController extends Controller {

    public $successStatus = 200;

    public function getAllPosts(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null){
            $enrollments = Enrollment::all();

            return response()->json($enrollments, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
        
    }
    public function getPost(Request $request){
        $id = $request['pid']; // pid = post id 
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid
    
        $user = User::where('id', $userid)->where('remember_token', $token)->first();
    
         if ($user != null){
            $enrollments = Enrollment::where('id', $id)->first();
    
             if ($enrollments != null){
                return response()->json($enrollments, $this->successStatus);
             } else {
                return response()->json(['response' => 'Post not found'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
    }
    public function searchPost(Request $request){
        $params = $request['p']; // p = params
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null){
            $enrollments = Enrollment::where('Firstname', 'LIKE', '%' . $params . '%')
            ->orWhere('Middlename', 'LIKE', '%' . $params . '%')
            ->get();

// SELECT * FROM posts WHERE firstname LIKE '%params%' OR middlename LIKE '%params%'  

            if ($enrollments != null){
                return response()->json($enrollments, $this->successStatus);
            } else {
                return response()->json(['response' => 'Post not found'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
    } 
}