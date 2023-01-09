@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <!-- grid -->
    <!-- 6rows -->
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
            <h1>EDIT</h1>
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
            <!-- form -->
            <form action="{{ route('task.update',$task->id)}}" method="POST" enctype='multipart/form-data'>
                @csrf
                @method('PUT')
                @csrf
                <!-- <input type="hidden" name="completed" value="1"> -->
                <div class="form-group">
                    <!-- カテゴリ選択（追加中） -->
                    <div class="select-tag">
                        <div class="category">
                            <label>Category</label>
                            <select class="form-control" id="category" name="category" required>
                                @foreach($categories as $index => $name)
                                    <option value="" hidden>Select Category</option>
                                    <option value="{{ $index }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <label>Channel name</label>
                    <input type="text" name="cname" value="{{ $task->cname }}" rows="1" cols="80" class="form-control">
                    <label>URL</label>
                    <input type="text" name="url" value="{{ $task->url }}" rows="1" cols="80" class="form-control">
                    <label>Description</label>
                    <textarea name="description" rows="20" rows="1" cols="80" class="form-control">{{ $task->description }}</textarea>
                    <label>Thumbnail</label><br>
                    <input type="file" name="thumbnail" multiple="multiple"/><br><br>
                    {{ csrf_field() }}
                    <input type="hidden" name="created_at" value="{{ $task->created_at }}">
                    <input type="hidden" name="updated_at" value="{{ $task->updated_at }}">
                    <input type="hidden" name="user_id" value="{{ $task->user_id }}">
                
                    <input type="submit" value="Done" class="btn btn-primary">
                </div>
            </form>
            <!-- center bottom -->
            <div class="card-body">
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
    <div class="row text-center">
        <div class="col">
            <!-- adv bottom -->
            <p>
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
        <!-- adv -->
        <tr>
            <span class="align-middle"><td>
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
            <!-- admax -->
            </td></span>
        </tr>

        <!-- ROW 2 (Error message) -->
        <tr>@if ($message = Session::get('success'))
            {{ $message }}
            @endif
        </tr>

        <!-- main contents -->
        <!-- form -->
        <tr>
            <form action="{{ route('task.update',$task->id)}}" method="POST"  enctype='multipart/form-data'>
                @csrf
                @method('PUT')
                @csrf
                <!-- <input type="hidden" name="completed" value="1"> -->
                <div class="form-group">
                    <label >Channel name</label><br>
                    <input type="text" name="cname" value="{{ $task->cname }}" rows="1" cols="80" class="form-control"><br>
                    <label >UR</label><br>
                    <input type="text" name="url" value="{{ $task->url }}" rows="1" cols="80" class="form-control"><br>
                    <label>Description</label>
                    <textarea name="description" rows="20" rows="1" cols="80" class="form-control">{{ $task->description }}</textarea>
                    <label>Thumbnail</label><br>
                    <input type="file" name="thumbnail" multiple="multiple"/><br>
                    {{ csrf_field() }}
                    <input type="hidden" name="created_at" value="{{ $task->created_at }}">
                    <input type="hidden" name="updated_at" value="{{ $task->updated_at }}">
                    <input type="hidden" name="user_id" value="{{ $task->user_id }}"><br><br>
                    <input type="submit" value="Edit" class="btn btn-primary">
                </div>
            </form>
        </tr>

         <!-- menu -->
         <hr>
        <h3 style="text-align:center">Menu</h3>
        <hr>
        <tr><a href="{{ route('task.home') }}">MyPage</a></tr><br><br>

        <!-- adv -->
        <tr>
        <!-- admax -->
        <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
        <!-- admax -->
        </tr>

    </table>
    @endif
</div>
@endsection
