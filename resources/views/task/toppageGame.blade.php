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
    @if($agent ==='pc')
    <!-- grid -->
    <!-- 5rows -->
    <!-- ********************************************* -->
    <!-- 　                 　　 PC                     -->
    <!-- ********************************************* -->

    <!-- row1 -->
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
        
    <!-- row2 -->
    <div class="row">
        <div class="col">
            <!-- title -->
            <h1 class="text-center">Game CHANNELS</h1>
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

    <!-- row3 -->
    <div class="row">
        <!-- main -->  
        <div class="col">
            <!-- agent check -->
            <h6 class="text-center">Device: {{ $agent }}<h6>
            
        </div>
    </div>

    <!-- row4 -->
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
                        <th style="width: 7%; font-size:8pt;">Like</th>
                        <th style="width: 6%; font-size:8pt;">Comment</th>
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
                        <td style="font-size:8pt;">@if($task->is_liked_by_auth_user())
                                <a href="{{ route('task.unlike', $task->id) }}" class="btn btn-success btn-sm" style="font-size:8pt;">Like<span class="badge">{{ $task->likes->count() }}</span></a>
                            @else
                                <a href="{{ route('task.like', $task->id) }}" class="btn btn-secondary btn-sm">Like<span class="badge">{{ $task->likes->count() }}</span></a>
                            @endif
                        </td>
                        <td style="font-size:8pt;"><a href="{{ route('comments.reply',$task->id)}}">Reply</a></td>   
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- center bottom -->
            <div class="card-body">
                <!-- <p><a href="{{ route('task.home') }}" class="btn btn-link">MyPage</a></p> -->
            </div>
        </div>
        <div class="col-2">
            <!-- right adv -->
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6f18cf5c29638a99d9b905873c7c3b68"></script>
            <!-- admax -->
        </div>
    </div>

    <!-- row5 -->
    <<div class="row  text-center">
        <div class="col">
            <!-- adv bottom -->
            <p class="text-center">
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/38d3ef270b2c7117753b56cd85fa9297"></script>
            <!-- admax -->
            </p>
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
                    <!-- admax -->
                    <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
                    <!-- admax -->
                    </td>
                </span>
            </tr><br><br>

            <!-- title -->
            <tr>@if ($message = Session::get('success'))
                {{ $message }}
                @endif
            </tr><br><br>

            <!-- adv left -->
            <tr>
                <td>
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
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

            <!-- <tr><h5 class="font-weight-bold">Comment</h5></tr><br> -->
            <tr><a href="{{ route('comments.reply',$task->id)}}">Comment</a></tr><br><br>

            <!-- adv -->
            <div style="margin-top:10px;margin-bottom:30px;">
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
            <!-- admax -->
            </div>
            @endforeach

             <!-- menu -->
            <hr>
            <h3 style="text-align:center">Menu</h3>
            <hr>
            <!-- <tr><a href="{{ route('task.home') }}">MyPage</a></tr><br><br> -->

        </table>
    @endif
</div>
@endsection