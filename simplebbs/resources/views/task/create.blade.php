@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <!-- grid -->
    <!-- 6rows -->
    <!-- ********************************************* -->
    <!-- 　                 　　 PC                     -->
    <!-- ********************************************* -->

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
                    <label>Channel name</label>
                    <input type="text" name="cname" rows="1" cols="100" value="(Channel name: max40, URL:correct format, Description: max300, Select thumbnail file)" class="form-control">
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

                <!-- cnt comment merge -->
                <input type="hidden" name="cnt_comment" value="">

                <input type="submit" value="Register" class="btn btn-primary">
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
                <input type="text" name="cname" rows="1" cols="100" value="" class="form-control">
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

            <!-- cnt comment merge -->
            <input type="hidden" name="cnt_comment" value="">

            <input type="submit" value="Register" class="btn btn-primary">
            </form>
        </tr><br>

        <!--  menu -->
        <tr><a href="{{ route('task.home') }}" class="btn btn-link">MyPage</a></tr>

    </table>
    @endif
</div>
@endsection