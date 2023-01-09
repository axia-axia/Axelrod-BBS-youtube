@extends('layouts.app')
@section('content')
<div class="container-fluid">
     <!-- js -->
     <script>
        function like(taskId) {
        $.ajax({
            headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: `/like/${taskId}`,
            type: "POST",
        })
            .done(function (data, status, xhr) {
            console.log(data);
            })
            .fail(function (xhr, status, error) {
            console.log();
            });
        }
    </script>
    
    <!-- grid -->
    <!-- 5rows -->
    <!-- ********************************************* -->
    <!-- 　                 　　 PC                     -->
    <!-- ********************************************* -->

    @if($agent ==='pc')
        
    <!-- row1 -->
    <div class="row  text-center">
        <div class="col">
            <h3>CHANNEL CATEGORIES</h3>
            <h6>※ You can register over multi categories as much as you want!!</h6>
        </div>
    </div>
    
    <!-- row2 -->
    <div class="row text-center">
        <div class="col-3">
            <li> <a href="{{ route('task.toppageFood') }}">Food</a></li>
            <li> <a href="{{ route('task.toppageTravel') }}">Travel</a></li>
            <li> <a href="{{ route('task.toppageLifestyle') }}">Lifestyle</a></li>
            <li> <a href="{{ route('task.toppageBeauty') }}">Beauty</a></li>
            <li> <a href="{{ route('task.toppageFinance') }}">Finance</a></li>
        </div>
        <div class="col-3">
            <li> <a href="{{ route('task.toppageArt') }}">Art</a></li>
            <li> <a href="{{ route('task.toppageCulture') }}">Culture</a></li>
            <li> <a href="{{ route('task.toppageCarbike') }}">Car/Bike/Other automobile</a></li>
            <li> <a href="{{ route('task.toppageCharity') }}">Charity</a></li>
            <li> <a href="{{ route('task.toppageBook') }}">Books</a></li>
        </div>
        <div class="col-3">
            <li> <a href="{{ route('task.toppageDiy') }}">DIY</a></li>
            <li> <a href="{{ route('task.toppageGame') }}">Game</a></li>
            <li> <a href="{{ route('task.toppageTvmovie') }}">TV/Movies</a></li>
            <li> <a href="{{ route('task.toppageHowto') }}">How-to</a></li>
            <li> <a href="{{ route('task.toppageMentalmind') }}">Mental/Mind</a></li>
        </div>
        <div class="col-3">
            <li> <a href="{{ route('task.toppageMusic') }}">Music</a></li>
            <li> <a href="{{ route('task.toppageNewitem') }}">New-items/Gadgets</a></li>
            <li> <a href="{{ route('task.toppagePcmobile') }}">PC/Mobile</a></li>
            <li> <a href="{{ route('task.toppageSports') }}">Sports</a></li>
            <li> <a href="{{ route('task.toppageBusiness') }}">Business</a></li>
        </div>
    </div>

    <!-- row3 -->
    <div class="row  text-center">
        <div class="col">
            <p  class="text-center">
                <!-- adv top -->
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/38d3ef270b2c7117753b56cd85fa9297"></script>
                <!-- admax -->
            </p>
        </div>
    </div>


    <!-- row4 -->
    <div class="row  text-center">
        <div class="col">
            <!-- title -->
            <hr>
            <h1>ALL CHANNELS</h1>
            <hr>

            <!-- error msg -->
            <div>
                @if ($errors->has('title'))
                <tr>
                <th>ERROR</th>
                @foreach($errors->get('title') as $message)
                <td> {{ $message }} </td>
                @endforeach
                </tr>
                @endif
            </div>
        </div>
    </div>

    <!-- row5 -->
    <div class="row  text-center">
        <!-- main -->  
        <div class="col">
            <!-- agent check -->
            <h6 class="text-center">Device: {{ $agent }}<h6>
            
        </div>
    </div>

    <!-- row6 -->
    <div class="row">
        <div class="col-2">
            <!-- adv left -->
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6f18cf5c29638a99d9b905873c7c3b68"></script>
            <!-- admax -->
        </div>
        <div class="col-8">
            <!-- center upper -->
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 20%">Channel name</th>
                        <th style="width: 15%">URL</th>
                        <th style="width: 35%">Description</th>
                        <th style="width: 15%">Thumbnail</th>
                        <th style="width: 5%; font-size:8pt;">Created at</th>
                        <th style="width: 5%; font-size:8pt;">Updated at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->cname }}</td>
                        <td>{{ $task->url }}</td>
                        <td>{{ $task->description }}</td>
                        <td class="col-4">
                            @if ($task->thumbnail !=='')
                            <img src="{{ \Storage::url('img/'.$task->thumbnail) }}">
                            @else
                            <img src="{{ \Storage::url('img/no_image.png') }}">
                            @endif
                        </td>
                        <td style="font-size:8pt;">{{ $task->created_at }}</td>
                        <td style="font-size:8pt;">{{ $task->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- center bottom -->
            <div class="card-body">
                <p><a href="{{ route('task.create') }}" class="btn btn-outline-success">Creat new</a></p>
            </div>
        </div>
        <div class="col-2">
            <!-- right adv -->
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6f18cf5c29638a99d9b905873c7c3b68"></script>
            <!-- admax -->
        </div>
    </div>

    <!-- row7 -->
    <div class="row text-center">
        <div class="col">
            <!-- adv bottom -->
            <p class="text-center">
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/38d3ef270b2c7117753b56cd85fa9297"></script>
            <!-- admax -->
            </p>
        </div>
    </div>


    <!-- 追加　CREATE -->
    <!-- row1 -->
    <div class="row  text-center">
        <div class="col">
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/38d3ef270b2c7117753b56cd85fa9297"></script>
            <!-- admax -->
        </div>
    </div>

    <!-- row2 -->
    <div class="row  text-center">
        <div class="col">
            <h1>REGISTER YOUR CHANEL</h1>
            <h6>※ All items are required.</h6>
        </div>
    </div>
    
    <!-- row3 -->
    <div class="row">
        <div class="col">
            <!-- error msg -->
            <div>
                @if ($errors->has('category_id'))
                <tr>
                <th>ERROR</th>
                @foreach($errors->get('category_id') as $message)
                <td> {{ $message }} </td>
                @endforeach
                </tr>
                @endif
            </div>
            <div>
                @if ($errors->has('cname'))
                <tr>
                <th>ERROR</th>
                @foreach($errors->get('cname') as $message)
                <td> {{ $message }} </td>
                @endforeach
                </tr>
                @endif
            </div>
            <div>
                @if ($errors->has('url'))
                <tr>
                <th>ERROR</th>
                @foreach($errors->get('url') as $message)
                <td> {{ $message }} </td>
                @endforeach
                </tr>
                @endif
            </div>
            <div>
                @if ($errors->has('description'))
                <tr>
                <th>ERROR</th>
                @foreach($errors->get('description') as $message)
                <td> {{ $message }} </td>
                @endforeach
                </tr>
                @endif
            </div>
            <div>
                @if ($errors->has('thumbnail'))
                <tr>
                <th>ERROR</th>
                @foreach($errors->get('thumbnail') as $message)
                <td> {{ $message }} </td>
                @endforeach
                </tr>
                @endif
            </div>
            <div>
                @if ($errors->has('yourname'))
                <tr>
                <th>ERROR</th>
                @foreach($errors->get('yourname') as $message)
                <td> {{ $message }} </td>
                @endforeach
                </tr>
                @endif
            </div>
            <div>
                @if ($errors->has('delete_pass'))
                <tr>
                <th>ERROR</th>
                @foreach($errors->get('delete_pass') as $message)
                <td> {{ $message }} </td>
                @endforeach
                </tr>
                @endif
            </div>
        </div>
    </div>

    <!-- row4 -->
    <div class="row text-center">
        <!-- main -->  
        <div class="col">
            <!-- agent check -->
            <h6 class="text-center">Device: {{ $agent }}<h6>
            @if($agent ==='pc')
        </div>
    </div>

    <!-- row5 -->
    <div class="row">
        <div class="col-2">
            <!-- adv left -->
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6f18cf5c29638a99d9b905873c7c3b68"></script>
            <!-- admax -->
        </div>
        <div class="col-8">
            <!-- center upper -->
            <!-- form -->
            <!-- form -->
            <form action="{{ route('task.store')}}" method="POST" enctype='multipart/form-data'>
                @csrf
                <!-- <input type="hidden" name="completed" value="1"> -->
                <div class="select-tag">
                    <div class="category">
                        <select class="form-control" id="category" name="category" required>
                            @foreach($categories as $index => $name)
                                <option value="" hidden>Category</option>
                                <option value="{{ $index }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Channel name (Max40)</label>
                    <input type="text" name="cname" rows="1" cols="100" value="(Channel name: max40, URL:correct format, Description: max300, Select thumbnail file)" class="form-control">
                </div>
                <div class="form-group">
                    <label>URL (Correct URL format)</label>
                    <textarea name="url" rows="1" cols="100" class="form-control">{{old('url')}}</textarea>
                </div>
                <div class="form-group">
                    <label>Description (Max3000)</label>
                    <textarea name="description" rows="5" cols="100" class="form-control">{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <label>Thumbnail (jpeg, jpg, png, bmb)</label><br>
                    <input type="file" name="thumbnail" multiple="multiple"/>
                    {{ csrf_field() }}
                </div>
                <div class="form-group">
                    <label>Your name</label>
                    <input type="text" name="yourname" rows="1" cols="100" class="form-control">
                </div>
                <div class="form-group">
                    <label>Your Email (Be hidden.)</label>
                    <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                </div>

                <div class="form-group">
                    <label>Delete password (Max20. Be hidden. Don't forget.)</label>
                    <input type="text" name="youremail" rows="1" cols="1" class="form-control">
                </div>

                <input type="submit" value="Register" class="btn btn-primary">
            </form>

            <!-- center bottom -->
            <div class="card-body">
                <p><a href="{{ route('task.toppage') }}" class="btn btn-link">MyPage</a></p>
            </div>

        </div>

        <div class="col-2">
            <!-- adv right -->
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6f18cf5c29638a99d9b905873c7c3b68"></script>
            <!-- admax -->
        </div>
    </div>


    
    
    <!-- ********************************************* -->
    <!-- 　                  mobile                     -->
    <!-- ********************************************* -->
    @else        
        <table class="table">
            <!-- adv top -->
            <tr>
                <span class="align-middle">
                    <td>
                    <script src="https://adm.shinobi.jp/s/c6c1dfded2d59df81a0417c4d07bae36"></script>
                    </td>
                </span>
            </tr><br><br>

            <!-- title -->
            <tr>
                <h1 style="text-align:center">ALL CHANNELS</h1>
            </tr><br><br>

            <!-- adv left -->
            <tr>
                <td>
                <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6f18cf5c29638a99d9b905873c7c3b68"></script>
            <!-- admax -->
                </td>
            </tr><br><br>

            <!-- main -->
            @foreach ($tasks as $task)
            <tr><h5 class="font-weight-bold">Thread name</h5></tr><br>
            <tr>{{ $task->cname }}</tr><br><br>

            <tr><h5 class="font-weight-bold">URL</h5></tr><br>
            <tr>{{ $task->url }}</tr><br><br>

            <tr><h5 class="font-weight-bold">Description</tr>
            <tr>{{ $task->description }}</tr><br><br>

            <tr><h5 class="font-weight-bold">Thumbnail</h5></tr><br>
            <tr class="col-4">
                @if ($task->thumbnail !=='')
                <img src="{{ \Storage::url('img/'.$task->thumbnail) }}">
                @else
                <img src="{{ \Storage::url('img/no_image.png') }}">
                @endif
            </tr><br><br>

            <tr><h5 class="font-weight-bold">Created at</h5></tr><br>
            <tr>{{ $task->created_at }}</tr><br><br>

            <tr><h5 class="font-weight-bold">Updated at</h5></tr><br>
            <tr>{{ $task->updated_at }}</tr><br><br>

            <!-- 
            <tr><h5 class="font-weight-bold">Like</h5></tr><br> -->
            <tr>@if($task->is_liked_by_auth_user())
                    <a href="{{ route('task.unlike', $task->id) }}" class="btn btn-success btn-sm">Like<span class="badge">{{ $task->likes->count() }}</span></a>
                @else
                    <a href="{{ route('task.like', $task->id) }}" class="btn btn-secondary btn-sm">Like<span class="badge">{{ $task->likes->count() }}</span></a>
                @endif
            </tr><br><br>

            <!-- adv -->
            <div style="margin-top:10px;margin-bottom:30px;">
            <script src="https://adm.shinobi.jp/s/c6c1dfded2d59df81a0417c4d07bae36"></script>
            </div>
            @endforeach

             <!-- menu -->
            <hr>
            <h3 style="text-align:center">Menu</h3>
            <hr>
            <tr><a href="{{ route('task.create') }}" class="btn btn-primary">Creat new</a></tr><br><br>
            <tr><a href="{{ route('task.toppage') }}">MyPage</a></tr><br><br>

        </table>

        <!-- 追加　CREATE -->
        <table class="table">
        <!-- adv top -->
        <tr>
            <span class="align-middle"><td>
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
            <!-- admax -->
            </td></span>
        </tr>

        <!-- title -->
        <tr>
            <!-- error msg -->
            @if ($errors->has('cname'))
            <tr>
            <th>ERROR</th>
            @foreach($errors->get('cname') as $message)
            <td> {{ $message }} </td>
            @endforeach
            </tr>
            @endif

            @if ($errors->has('url'))
            <tr>
            <th>ERROR</th>
            @foreach($errors->get('url') as $message)
            <td> {{ $message }} </td>
            @endforeach
            </tr>
            @endif

            @if ($errors->has('description'))
            <tr>
            <th>ERROR</th>
            @foreach($errors->get('description') as $message)
            <td> {{ $message }} </td>
            @endforeach
            </tr>
            @endif

            @if ($errors->has('thumbnail'))
            <tr>
            <th>ERROR</th>
            @foreach($errors->get('thumbnail') as $message)
            <td> {{ $message }} </td>
            @endforeach
            </tr>
            @endif

            @if ($errors->has('yourname'))
            <tr>
            <th>ERROR</th>
            @foreach($errors->get('yourname') as $message)
            <td> {{ $message }} </td>
            @endforeach
            </tr>
            @endif

            @if ($errors->has('delete_pass'))
            <tr>
            <th>ERROR</th>
            @foreach($errors->get('delete_pass') as $message)
            <td> {{ $message }} </td>
            @endforeach
            </tr>
            @endif
            

        </tr>

        <!-- adv -->
        <tr>
            <td>
            <script src="https://adm.shinobi.jp/s/c6c1dfded2d59df81a0417c4d07bae36"></script>
            </td>
        </tr>

        <!-- main contents -->
        <!-- form -->
        <tr>
            <form action="{{ route('task.store')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <!-- <input type="hidden" name="completed" value="1"> -->
            <div class="form-group">
                <label>Channel name</label>
                <input type="text" name="cname" rows="1" cols="1" value="" class="form-control">
            </div>
            <div class="form-group">
                <label>URL</label>
                <textarea name="url" rows="1" cols="100" class="form-control">{{old('url')}}</textarea>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" rows="5" cols="100" class="form-control">{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <input type="file" name="thumbnail" multiple="multiple"/>
                {{ csrf_field() }}
            </div>
            <div class="form-group">
                <label>Your name</label>
                <input type="text" name="yourname" rows="1" cols="1" value="" class="form-control">
            </div>
            <div class="form-group">
                <label>Delete password</label>
                <input type="text" name="delete_pass" rows="1" cols="1" value="" class="form-control">
            </div>

        </tr><br>

        <!--  menu -->
        <tr><a href="{{ route('task.toppage') }}" class="btn btn-link">MyPage</a></tr>

    </table>
    @endif
    @endif
</div>
@endsection
