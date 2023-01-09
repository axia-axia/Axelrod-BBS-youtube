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

        $tasks = Task::where('category_id', 1)->get();
        $name = Auth::user();
    
        return view('task.toppageFood', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 2)->get();
        $name = Auth::user();
    
        return view('task.toppageTravel', compact('tasks','name','agent'));
    }
    //Food threads
    public function toppageLifestyle(Request $request)
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

        $tasks = Task::where('category_id', 3)->get();
        $name = Auth::user();
    
        return view('task.toppageLifestyle', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 4)->get();
        $name = Auth::user();
    
        return view('task.toppageBeauty', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 5)->get();
        $name = Auth::user();
    
        return view('task.toppageFinance', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 6)->get();
        $name = Auth::user();
    
        return view('task.toppageArt', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 7)->get();
        $name = Auth::user();
    
        return view('task.toppageCulture', compact('tasks','name','agent'));
    }
    //Food threads
    public function toppageCarbike(Request $request)
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

        $tasks = Task::where('category_id', 8)->get();
        $name = Auth::user();
    
        return view('task.toppageCarbike', compact('tasks','name','agent'));
    }
    //Food threads
    public function toppageHealth(Request $request)
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

        $tasks = Task::where('category_id', 9)->get();
        $name = Auth::user();
    
        return view('task.toppageHealth', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 10)->get();
        $name = Auth::user();
    
        return view('task.toppageMusic', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 11)->get();
        $name = Auth::user();
    
        return view('task.toppageBusiness', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 12)->get();
        $name = Auth::user();
    
        return view('task.toppageBook', compact('tasks','name','agent'));
    }
    //Food threads
    public function toppageNewitem(Request $request)
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

        $tasks = Task::where('category_id', 13)->get();
        $name = Auth::user();
    
        return view('task.toppageNewitem', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 14)->get();
        $name = Auth::user();
    
        return view('task.toppageGame', compact('tasks','name','agent'));
    }
    //Food threads
    public function toppagePcmobile(Request $request)
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

        $tasks = Task::where('category_id', 15)->get();
        $name = Auth::user();
    
        return view('task.toppagePcmobile', compact('tasks','name','agent'));
    }
    //Food threads
    public function toppageHowto(Request $request)
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

        $tasks = Task::where('category_id', 16)->get();
        $name = Auth::user();
    
        return view('task.toppageHowto', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 17)->get();
        $name = Auth::user();
    
        return view('task.toppageDiy', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 18)->get();
        $name = Auth::user();
    
        return view('task.toppageSports', compact('tasks','name','agent'));
    }
    //Food threads
    public function toppageTvmovie(Request $request)
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

        $tasks = Task::where('category_id', 19)->get();
        $name = Auth::user();
    
        return view('task.toppageTvmovie', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 20)->get();
        $name = Auth::user();
    
        return view('task.toppageMentalmind', compact('tasks','name','agent'));
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

        $tasks = Task::where('category_id', 21)->get();
        $name = Auth::user();
    
        return view('task.toppageCharity', compact('tasks','name','agent'));
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

        // カテゴリ選択　（追加）
        $categories = config('category');
        
        return view('task.toppage', compact('tasks','cnt_array', 'agent', 'categories'));
    }
    
    public function create(Request $request)
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

        // カテゴリ選択　（追加）
        $categories = config('category');
    

        return view('task.create', compact('agent','categories'));
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            // 'category_id' => 'required',
            'cname' => 'required|max:40|regex:/^[^#<>^;_]*$/',
            'url' => 'required|url',
            'description' => 'required|max:3000|regex:/^[^#<>^;_]*$/',
            'thumbnail' => 'required|file|mimes:jpeg,png,jpg,bmb|max:2048',
            'yourname' => 'required|max:40|regex:/^[^#<>^;_]*$/',
            'youremail' => 'required|email:filter,dns',
            'delete_pass' => 'required',
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
            'yourname.regex' => '[Your name] Cant use special charactors.',
            'youremail.required' => '[Your Email] Required.',
            'youremail.email:filter,dns' => '[Your Email] Need correct format.',
            'delete_pass.required' => '[Delete password] Required.',
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
        Task::where('id', $request->id)->delete();
        $tasks = Task::get();

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

        return view('task.myindex', compact('tasks','agent'));
    }

}