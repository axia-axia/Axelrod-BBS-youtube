@extends('layouts.app')
@section('content')
<div class="container-fluid">

    <!-- 　                 　　 PC                     -->

    @if($agent ==='pc')

    <!-- row1 -->
    <div class="container-fluid">
        <div class="row  text-center">
            <div class="col">
                <!-- title -->
                <h1 class="text-center">【TRAVEL】</h1>
                <h1>REGISTERED WEBSITES</h1>

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
                    @if ($errors->has('youremail'))
                    <tr>
                    <th>ERROR</th>
                    @foreach($errors->get('youremail') as $message)
                    <td> {{ $message }} </td>
                    @endforeach
                    </tr>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- row2 -->
    <div class="row  text-center">
        <!-- main -->  
        <div class="col">
            <!-- agent check -->
            <h6 class="text-center">Device: {{ $agent }}<h6>
                <h5 style="text-decoration:underline">[HOW TO DELETE] Put email and password bellow.</h5>
        </div>
    </div>

    <!-- row3 -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/fec9148c38c1c05759e417de0f29ea63"></script>
                <!-- admax -->
            </div>
            <div class="col-8">
                <!-- center upper -->
                @if ($error_msg)
                <p>{{ $error_msg }}</p>
                @endif
                <table class="table table-dark table-borderless">
                    <thead>
                        <tr>
                            <th style="width: 15%">IMG</th>
                            <th style="width: 20%">TITLE</th>
                            <th style="width: 30%">DESCRIPTION</th>
                            <th style="width: 10%">URL</th>
                            <th style="width: 10%">CATEGORY</th>
                            <th style="width: 20%">[DELETE]</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td class="col-4">
                                @if ($task->thumbnail !=='')
                                <img src="{{ \Storage::url('img/'.$task->thumbnail) }}">
                                @else
                                <img src="{{ \Storage::url('img/no_image.png') }}">
                                @endif
                            </td>
                            <td>{{ $task->cname }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->url }}</td>
                            <td>{{ $task->category_id }}</td>
                            <td>
                                <form action="{{ route('task.delete')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label style="font-size:9pt">Your Email</label>
                                        <input type="text" name="youremail" rows="1" cols="1" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size:9pt">Delete password</label>
                                        <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                                    </div>
                                    <input name="id" type="hidden" value="{{ $task->id }}">
                                    <input type="submit" value="DELETE" class="btn btn-primary" name="delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-2">
                <!-- right adv -->
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/fec9148c38c1c05759e417de0f29ea63"></script>
                <!-- admax -->
            </div>
        </div>
    </div>

    <!-- ADDED:　CREATE -->


    <!-- row4 -->
    <div class="container-fluid">
        <div class="row  text-center" style="margin-bottom:50px; margin-top:150px">
            <div class="col">
                <h1>REGISTRATIONN</h1>
                <h6>Fill up all items bellow</h6>
                <h5 style="text-decoration:underline"> [Who can register?] Company, Organization, Individual, Group whatsover.</h5>
            </div>
        </div>
    </div>
    
    <!-- row5 -->
    <div class="container-fluid">
        <div class="row  text-center">
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
    </div>

    <!-- row6 -->

    <div class="container-fluid">
        <div class="row  text-center" >
            <div class="col-12" style="margin-bottom:50px" >
                <!-- center upper -->
                <!-- form -->
                <form action="{{ route('task.store') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <p></p>
                    <div class="form-group">
                        <label>1.TITLE[Max40]</label>
                        <input type="text" name="cname" rows="1" cols="1" value="{{old('cname')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>2.URL [Correct format]</label>
                        <textarea name="url" rows="1" cols="100" class="form-control" value="{{old('url')}}">{{old('url')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>3.DESCRIPTION [Max3000]</label>
                        <textarea name="description" rows="5" cols="100" class="form-control"  value="{{old('description')}}">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>4.IMG [jpeg, jpg, png, bmb]</label>
                        <input type="file" name="thumbnail" value="{{old('thumbnail')}}" multiple="multiple"/>
                        {{ csrf_field() }}
                    </div>
                    <div class="form-group">
                        <label>5.NAME</label>
                        <input type="text" name="yourname"value="{{old('yourname')}}" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>6.EMAIL (Hidden)</label>
                        <input type="text" name="youremail" value="{{old('youremail')}}" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>8.DELETE PASSWORD (Max20, Hidden)</label>
                        <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>9.CATEGORY</label>
                        <select class="form-control" id="category" name="category">
                        @foreach (\CategoryConst::CATEGORY_LIST as $name => $number)
                            <option value="{{ $name }}">{{ $number }} {{$name}}</option>
                        @endforeach
                    </div>

                    <input type="submit" value="REGISTER" class="btn btn-primary">
                </form>

                <!-- center bottom -->
                <div class="card-body">
                    <p><a href="{{ route('task.toppage') }}" class="btn btn-link">Back to Top page</a></p>
                </div>
            </div>
        </div>
    </div>

            
    <!-- row7 -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h3>CATEGORIES</h3>
            </div>
        </div>
    </div>


    <div class="row text-center">
        <div class="col-3">
            <li> <a href="{{ route('task.toppageFood') }}">Food</a></li>
            <li> <a href="{{ route('task.toppageTravel') }}">Travel</a></li>
            <li> <a href="{{ route('task.toppageBeauty') }}">Beauty</a></li>
            <li> <a href="{{ route('task.toppageCulture') }}">Culture</a></li>
            <li> <a href="{{ route('task.toppageArt') }}">Art</a></li>
        </div>
        <div class="col-3">
            <li> <a href="{{ route('task.toppageCharity') }}">Charity</a></li>
            <li> <a href="{{ route('task.toppageBusiness') }}">Business</a></li>
            <li> <a href="{{ route('task.toppageTvMovie') }}">TV・Movies</a></li>
            <li> <a href="{{ route('task.toppageAutomobile') }}">Automobile</a></li>
            <li> <a href="{{ route('task.toppageFinance') }}">Finance</a></li>
        </div>
        <div class="col-3">
            <li> <a href="{{ route('task.toppageGame') }}">Game</a></li>
            <li> <a href="{{ route('task.toppageLife') }}">Life</a></li>
            <li> <a href="{{ route('task.toppageMedical') }}">Medical</a></li>
            <li> <a href="{{ route('task.toppageMusic') }}">Music</a></li>
            <li> <a href="{{ route('task.toppageHowTo') }}">How-to</a></li>
        </div>
        <div class="col-3">
            <li> <a href="{{ route('task.toppageComputerMobile') }}">Computer・Mobilephone etc</a></li>
            <li> <a href="{{ route('task.toppageScience') }}">Science</a></li>
            <li> <a href="{{ route('task.toppageSports') }}">Sports</a></li>
            <li> <a href="{{ route('task.toppageDiy') }}">DIY</a></li>
            <li> <a href="{{ route('task.toppageBook') }}">Books</a></li>
        </div>
    </div>

    <!-- row9 -->   
    <div class="container-fluid" style="margin-top:50px;margin-bottom:50px;">
        <div class="row  text-center">
            <div class="col-12">
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/42491d2ae5461922577203e25e507c59"></script>
                <!-- admax -->
            </div>
        </div>
    </div>






    
    <!-- 　                  mobile                     -->

    @else  


    <!-- row3 -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- adv left -->
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/a39718b74daa16f032a8b3b00b456f49"></script>
                <!-- admax -->
            </div>
        </div>
    </div>

    <!-- row1 -->
    <div class="container-fluid">
        <div class="row  text-center">
            <div class="col">
                <!-- title -->
                <h1 class="text-center">【TRAVEL】</h1>
                <h1>REGISTERED WEBSITES</h1>

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
                    @if ($errors->has('youremail'))
                    <tr>
                    <th>ERROR</th>
                    @foreach($errors->get('youremail') as $message)
                    <td> {{ $message }} </td>
                    @endforeach
                    </tr>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- row2 -->
    <div class="row  text-center">
        <!-- main -->  
        <div class="col">
            <!-- agent check -->
            <h6 class="text-center">Device: {{ $agent }}<h6>
                <h5 style="text-decoration:underline">[How to delete?] Put your registered Email & Password</h5>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- center upper -->
                <table class="table table-dark table-borderless">
                    @foreach ($tasks as $task)
                        <tr>
                            <th style="width: 100%; text-align:center;">TITLE</th>
                        </tr>
                        <tr>
                            <td>{{ $task->cname }}</td>
                        </tr>
                        <tr>
                        <th style="width: 100%; text-align:center;">IMG</th>
                        </tr>
                        <td class="col-4">
                            @if ($task->thumbnail !=='')
                            <img src="{{ \Storage::url('img/'.$task->thumbnail) }}">
                            @else
                            <img src="{{ \Storage::url('img/no_image.png') }}">
                            @endif
                        </td>
                        <tr>
                        <th style="width: 100%; text-align:center;">DESCRIPTION</th>
                        </tr>
                        <tr>
                            <td>{{ $task->description }}</td>
                        </tr>
                        <tr>
                        <th style="width: 100%; text-align:center;">URL</th>
                        </tr>
                        <tr>
                            <td>{{ $task->url }}</td>
                        </tr>
                        <tr>
                        <th style="width: 100%; text-align:center;">[DELETE]</th>
                        </tr>
                        <tr>
                            <td>
                                <form action="{{ route('task.delete')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label style="font-size:9pt">EMAIL (Hidden)</label>
                                        <input type="text" name="youremail" rows="1" cols="1" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size:9pt">DELETE PASSWORD (HIDDEN)</label>
                                        <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                                    </div>
                                    <input name="id" type="hidden" value="{{ $task->id }}">
                                    <input type="submit" value="DELETE" class="btn btn-primary" name="delete">
                                </form>
                            </td>
                        </tr>
                        <tr>
                        <td></td><td></td><td></td><td></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <!-- right adv -->
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/a39718b74daa16f032a8b3b00b456f49"></script>
                <!-- admax -->
            </div>
        </div>
    </div>

    <!-- ADDED:　CREATE -->


    <!-- row4 -->
    <div class="container-fluid">
        <div class="row  text-center" style="margin-bottom:50px; margin-top:150px">
            <div class="col">
                <h1>REGISTRATION FROM HERE</h1>
                <h6>Fill up all items bellow</h6>
                <h5 style="text-decoration:underline">[Who can register?] Company, Organization, Individual, Group whatsover</h5>
            </div>
        </div>
    </div>
    
    <!-- row5 -->
    <div class="container-fluid">
        <div class="row  text-center">
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
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/a39718b74daa16f032a8b3b00b456f49"></script>
                <!-- admax -->
            </div>
        </div>
    </div>

    <!-- row6 -->

    <div class="container-fluid">
        <div class="row  text-center" >
            <div class="col-12" style="margin-bottom:50px" >
                <!-- center upper -->
                <!-- form -->
                <form action="{{ route('task.store') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <p></p>
                    <div class="form-group">
                        <label>1.TITLE[Max40]</label>
                        <input type="text" name="cname" rows="1" cols="1" value="{{old('cname')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>2.URL [Correct format]</label>
                        <textarea name="url" rows="1" cols="100" class="form-control" value="{{old('url')}}">{{old('url')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>3.DESCRIPTION [Max3000]]</label>
                        <textarea name="description" rows="5" cols="100" class="form-control"  value="{{old('url')}}">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>4.IMG (jpeg, jpg, png, bmb)</label>
                        <input type="file" name="thumbnail" value="{{old('thumbnail')}}" multiple="multiple"/>
                        {{ csrf_field() }}
                    </div>
                    <div class="form-group">
                        <label>5.NAME</label>
                        <input type="text" name="yourname"value="{{old('yourname')}}" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>6.EMAIL (Hidden)</label>
                        <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>8.DELETE PASSWORD (Max20. Hidden)</label>
                        <input type="text" name="youremail" value="{{old('youremail')}}" rows="1" cols="1" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>9.CATEGORY</label>
                        <select class="form-control" id="category" name="category">
                        @foreach (\CategoryConst::CATEGORY_LIST as $name => $number)
                            <option value="{{ $name }}">{{ $number }} {{$name}}</option>
                        @endforeach
                    </div>

                    <input type="submit" value="REGISTER" class="btn btn-primary" name="category">
                </form>

                <!-- center bottom -->
                <div class="card-body">
                    <p><a href="{{ route('task.toppage') }}" class="btn btn-link">Back to Top page</a></p>
                </div>
            </div>
        </div>
    </div>

            
    <!-- row7 -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h3>CATEGORY LIST</h3>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-12">
            <li> <a href="{{ route('task.toppageFood') }}">Food</a></li>
            <li> <a href="{{ route('task.toppageTravel') }}">Travel</a></li>
            <li> <a href="{{ route('task.toppageBeauty') }}">Beauty</a></li>
            <li> <a href="{{ route('task.toppageCulture') }}">Culture</a></li>
            <li> <a href="{{ route('task.toppageArt') }}">Art</a></li>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-12">
            <li> <a href="{{ route('task.toppageCharity') }}">Charity</a></li>
            <li> <a href="{{ route('task.toppageBusiness') }}">Business</a></li>
            <li> <a href="{{ route('task.toppageTvMovie') }}">TV・Movies</a></li>
            <li> <a href="{{ route('task.toppageAutomobile') }}">Automobile</a></li>
            <li> <a href="{{ route('task.toppageFinance') }}">Finance</a></li>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-12">
            <li> <a href="{{ route('task.toppageGame') }}">Game</a></li>
            <li> <a href="{{ route('task.toppageLife') }}">Life</a></li>
            <li> <a href="{{ route('task.toppageMedical') }}">Medical</a></li>
            <li> <a href="{{ route('task.toppageMusic') }}">Music</a></li>
            <li> <a href="{{ route('task.toppageHowTo') }}">How-to</a></li>
            </div>
    

    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-12">
            <li> <a href="{{ route('task.toppageComputerMobile') }}">Computer・Mobilephone etc</a></li>
            <li> <a href="{{ route('task.toppageScience') }}">Science</a></li>
            <li> <a href="{{ route('task.toppageSports') }}">Sports</a></li>
            <li> <a href="{{ route('task.toppageDiy') }}">DIY</a></li>
            <li> <a href="{{ route('task.toppageBook') }}">Books</a></li>
            </div>
        </div>
    </div>

    <!-- row9 -->   
    <div class="container-fluid" style="margin-top:50px;margin-bottom:50px;">
        <div class="row  text-center">
            <div class="col-12">
                <!-- admax -->
                <script src="https://adm.shinobi.jp/s/a39718b74daa16f032a8b3b00b456f49"></script>
                <!-- admax -->
            </div>
        </div>
    </div>
    @endif
</div>
@endsection



