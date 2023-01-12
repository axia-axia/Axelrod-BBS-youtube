<?php

namespace App\Http\Controllers;

use Validator;
use App\Task;
use App\Category;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{

    //Food threads
    public function toppageFood(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Food')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageTravel(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Travel')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageLife(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id',  'Life')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageBeauty(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Beauty')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageFinance(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Finance')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageArt(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Art')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageCulture(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Culture')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageAutomobile(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Automobile')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageMedical(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Medical')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageMusic(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Music')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageBusiness(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Business')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageBook(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Books')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageComputerMobile(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Computer・Mobilephone etc')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageGame(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Game')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageMentalmind(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Mental・Mind')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageHowTo(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'How-to')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageDiy(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'DIY')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageSports(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Sports')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageScience(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Science')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //Food threads
    public function toppageTvMovie(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'TV・Movies')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }

    //Food threads
    public function toppageCharity(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        $tasks = Task::where('category_id', 'Charity')->get();
        $name = Auth::user();
    
        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }
    //all threads
    public function toppage(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        // get all tasks
        $tasks = Task::get();
        $cnt_array = array();

        $error_msg = "";

        return view('task.toppage', compact('tasks', 'agent', 'error_msg'));
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'cname' => 'required|max:40|regex:/^[^#<>^;_]*$/',
            'url' => 'required|url',
            'description' => 'required|max:3000|regex:/^[^#<>^;_]*$/',
            'thumbnail' => 'required|file|mimes:jpeg,png,jpg,bmb|max:2048',
            'yourname' => 'required|max:40|regex:/^[^#<>^;_]*$/',
            // 'youremail' => 'required|email:filter,dns',
            // 'delete_pass' => 'required',
            ],
            [
            'cname.required' => '[Channel name] Required.',
            'cname.max' => '[Channel name] Max40.',
            'cname.regex' => '[Channel name] Cant use special charactors.',
            'url.required'  => '[URL] Required.',
            'url.url'  => '[URL] Need correct URL.',
            'description.required'  => '[Description] Required.',
            'description.max'  => '[Description] Max3000.',
            'description.regex'  => '[Description] Cant use special charactors.',
            'thumbnail.required'  => '[Thumbnail] Required.',
            'thumbnail.file'  => '[Thumbnail] Required.',
            'thumbnail.mimes'  => '[Thumbnail] jpeg,png,jpg,bmb only.',
            'thumbnail.max'  => '[Thumbnail] max size 2048',
            'yourname.required' => '[Your name] Required.',
            'yourname.max' => '[Your name] Max40.',
            // 'yourname.regex' => '[Your name] Cant use special charactors.',
            // 'youremail.required' => '[Your Email] Required.',
            // 'youremail.email:filter,dns' => '[Your Email] Need correct format.',
            // 'delete_pass.required' => '[Delete password] Required.',
            ]);

        $task = new Task();
        $task->cname = $request->cname;
        $task->url = $request->url;
        $task->description = $request->description;
        $image_path = $request->file('thumbnail')->store('public/img/'); //追加（img）
        $task->thumbnail = basename($image_path);
        $task->yourname = $request->yourname;
        $task->youremail = $request->youremail;
        $task->delete_pass = $request->delete_pass;
        $task->category_id = $request->category; //追加（カテゴリ）
        $task->save();

        // agent check (pc or mobile)
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }

        return redirect('/submitted')->with(['agent' => $agent]);
    }

    public function submitted(Request $request)
    {
        // agent check (pc or mobile)
        //端末判断
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)
            || (strpos($user_agent, 'iPod') !== false)
            || (strpos($user_agent, 'Android') !== false)) {
            $agent ='mobile';
        } else {
            $agent = 'pc';
        }
    
        return view('task.submitted', compact('agent'));

    }

    public function delete(Request $request)
    {
        // validation
        $this->validate($request, [
            'delete_pass' => 'required',
            'youremail' => 'required|email:filter,dns',
            ],
            [ 
            'youremail.required' => '[Your Email] Required.',
            'youremail.email:filter,dns' => '[Your Email] Need correct format.',
            'delete_pass.required' => '[Delete password] Required.',
            ]);

            Log::debug($request->id);
        // email and delete pass check
        $task = DB::table('tasks')->where('id', $request->id)->first();
        Log::debug($request->youremail);
        Log::debug($request->delete_pass);
        Log::debug($task->youremail);
        Log::debug($task->delete_pass);
        if ($request->youremail == $task->youremail && $request->delete_pass == $task->delete_pass){
            Task::where('id', $request->id)->delete();
            $tasks = Task::get();
            // agent check (pc or mobile)
            //端末判断
            //削除してリターン
            $user_agent =  $request->header('User-Agent');
            if ((strpos($user_agent, 'iPhone') !== false)
                || (strpos($user_agent, 'iPod') !== false)
                || (strpos($user_agent, 'Android') !== false)) {
                $agent ='mobile';
            } else {
                $agent = 'pc';
            }
            $error_msg = "削除しました。";
            return view('task.toppage', compact('tasks','agent', 'error_msg'));

        } else {
            // agent check (pc or mobile)
            //端末判断
            //削除せずにリターン
            $user_agent =  $request->header('User-Agent');
            if ((strpos($user_agent, 'iPhone') !== false)
                || (strpos($user_agent, 'iPod') !== false)
                || (strpos($user_agent, 'Android') !== false)) {
                $agent ='mobile';
            } else {
                $agent = 'pc';
            }
            $tasks = Task::get();
            $error_msg = "【エラー】登録メールアドレス又は削除パスワードが異なります。";
            return view('task.toppage', compact('tasks','agent', 'error_msg'));

        }


        

        
    }

}