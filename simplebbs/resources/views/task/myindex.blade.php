@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <!-- grid -->
    <!-- 5rows -->
    <!-- ********************************************* -->
    <!-- 　                 　　 PC                     -->
    <!-- ********************************************* -->
@if($agent ==='pc')
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
            <h1>YOUR REGISTERD CHANELS</h1>
            <h6>※ update your info</h6>
        </div>
    </div>
    
    <!-- row3 -->
    <div class="row">
        <div class="col">
            <!-- error msg -->
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

            <div>
            @if ($errors->has('comment'))
            <tr>
            <th>ERROR</th>
            @foreach($errors->get('comment') as $message)
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
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 20%">Channel name</th>
                        <th style="width: 15%">URL name</th>
                        <th style="width: 45%">Description</th>
                        <th style="width: 20%">Thumbnail</th>
                        <th style="width: 10%; font-size:8pt;">Comment</th>
                        <th style="width: 7%; font-size:8pt;">Edit</th>
                        <th style="width: 7%; font-size:8pt;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->cname }}</td>
                        <td>{{ $task->url }}</td>
                        <td>{{ $task->description }}</td>
                        <td><img src="{{ \Storage::url('img/'.$task->thumbnail) }}"></td>
                        <td style="font-size:8pt"><a href="{{ route('comments.reply',$task->id)}}">Reply</a></td>
                        <td style="font-size:8pt"><a href="{{ route('task.edit',$task->id)}}">Edit</a></td>
                        <td style="font-size:8pt"><a href="{{ route('task.delete',$task->id)}}">Delete</a></td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- center bottom -->
            <div class="card-body">
                <p><a href="{{ route('task.create') }}" class="btn btn-outline-success">Creat new</a></p>
                <p><a href="{{ route('task.home') }}" class="btn btn-link">MyPage</a></p>
            </div>

        </div>
        <div class="col-2">
            <!-- adv right -->
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6f18cf5c29638a99d9b905873c7c3b68"></script>
            <!-- admax -->
        </div>
    </div>

    <!-- row6 -->
    <div class="row  text-center">
        <div class="col">
            <!-- adv bottom -->
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/38d3ef270b2c7117753b56cd85fa9297"></script>
            <!-- admax -->
        </div>
    </div>




    <!-- ********************************************* -->
    <!-- 　                  mobile                    -->
    <!-- ********************************************* -->
    @else
    <table class="table">
        <!-- adv top-->
        <tr>
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
            <!-- admax -->
        </tr>

        <!-- message -->
        <tr>@if ($message = Session::get('success'))
            {{ $message }}
            @endif
        </tr>

        <!-- title -->
        <hr>
        <h1 style="text-align:center">YOUR REGISTERED CHANNELS </h1>
        <hr>

        <!-- adv  -->
        <tr>
            <td>
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
            <!-- admax -->
            </td>
        </tr>

        <!-- main contents -->
        @foreach ($tasks as $task)
        <tr><h5 class="font-weight-bold">ID</h5></tr><br>
        <tr>{{ $task->id }}</tr><br><br>

        <tr><h5 class="font-weight-bold">Channel name</h5></tr><br>
        <tr>{{ $task->cname }}</tr><br><br>

        <tr><h5 class="font-weight-bold">URL</h5></tr><br>
        <tr>{{ $task->url }}</tr><br><br>

        <tr><h5 class="font-weight-bold">Description</h5></tr><br>
        <tr>{{ $task->description }}</tr><br><br>

        <!-- <tr><h5 class="font-weight-bold">IMG</h5></tr><br> -->
        <tr class="col-4">
            @if ($task->thumbnail !=='')
            <img src="{{ \Storage::url('img/'.$task->thumbnail) }}">
            @else
            <img src="{{ \Storage::url('img/no_image.png') }}">
            @endif
        </tr><br><br>

        <!-- like -->
        <tr>@if($task->is_liked_by_auth_user())
                <a href="{{ route('task.unlike', $task->id) }}" class="btn btn-success btn-sm">Like<span class="badge">{{ $task->likes->count() }}</span></a>
            @else
                <a href="{{ route('task.like', $task->id) }}" class="btn btn-secondary btn-sm">Like<span class="badge">{{ $task->likes->count() }}</span></a>
            @endif
        </tr><br><br>

        <!-- Operation -->
        <tr><a href="{{ route('task.edit', $task->id)}}">Edit</a></tr><br>
        <tr><a href="{{ route('task.delete',$task->id)}}">Delete</a></tr><br>
        <tr><a href="{{ route('comments.reply',$task->id)}}">Comment</a></tr><br><br>

        <!-- adv -->
        <!-- admax -->
        <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
        <!-- admax -->
        </tr><br><br>

        @endforeach

        <!-- menu -->
        <hr>
        <h3 style="text-align:center">Menu</h3>
        <hr>
        <tr><a href="{{ route('task.create') }}" class="btn btn-primary">Creat new</a></tr><br><br>
        <tr><a href="{{ route('task.home') }}" class="btn btn-link">MyPage</a></tr><br><br>

    </table>
    @endif
</div>
@endsection