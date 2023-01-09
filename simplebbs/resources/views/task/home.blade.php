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
            <h1>My Page</h1>
            <h6>※ You can register your channel from bellow.</h6>
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
            <div class="card">
                <div class="card-header">{{ __('MyPage') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	
                    <p>Welcome {{ Auth::user()->name }} !</p>
                    <p>{{ __('You are logged in !') }}</p>
                </div>
                
                <!-- added -->
                <div class="card-body">
                    <hr>
                    <h6>MENU</h6>
                    <hr>
                    <div class="card-body">
                        <li><a href="{{ route('task.create') }}"><b>【REGISTER YOUR CHANNEL FROM HERE】<b></a></li>
                        <p>※ You can register over multi categories as much as you want!!</p>
                        <li><a href="{{ route('task.toppage')}}">All channels (BBS top page)</a></li>
                        <li><a href="{{ route('task.myindex') }}">Your registered channels (Edit/Delete from here)</a></li>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p>Name:<span>{{$auth->name}}</span></p>
                        <p>ID:<span>{{$auth->id}}</span></p>
                        <p>Email:<span>{{$auth->email}}</span></p>
                        <!-- <p>Email verified at:<span>{{$auth->email_verified_at}}</span></p> -->
                        <!-- <p>Password:<span>{{$auth->password}}</span></p> -->
                        <p>Created at:<span>{{$auth->created_at}}</span></p>
                        <!-- <p>Updated at:<span>{{$auth->updated_at}}</span></p> -->
                    </div>
                </div>
            </div>

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

        <!-- adv -->
        <tr>
            <td>
            <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6b8240817566fb9e707c7a3df5720407"></script>
            <!-- admax -->
            </td>
        </tr>

        <!-- main contents -->
        <!-- center upper -->
        <div class="card">
            <div class="card-header">{{ __('MyPage') }}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    
                <p>Welcome {{ Auth::user()->name }} !</p>
                <p>{{ __('You are logged in !') }}</p>
            </div>
            
            <!-- added -->
            <div class="card-body">
                <hr>
                <h6>MENU</h6>
                <hr>
                <div class="card-body">
                    <li><a href="{{ route('task.create') }}"><b>【REGISTER YOUR CHANNEL FROM HERE】<b></a></li>
                    <p>※ You can register over multi categories as much as you want!!</p>
                    <li><a href="{{ route('task.toppage')}}">All channels (BBS top page)</a></li>
                    <li><a href="{{ route('task.myindex') }}">Your registered channels (Edit/Delete from here)</a></li>
                <div>
                <hr>
                <div class="card-body">
                    <p>Name:<span>{{$auth->name}}</span></p>
                    <p>ID:<span>{{$auth->id}}</span></p>
                    <p>Email:<span>{{$auth->email}}</span></p>
                    <!-- <p>Email verified at:<span>{{$auth->email_verified_at}}</span></p> -->
                    <!-- <p>Password:<span>{{$auth->password}}</span></p> -->
                    <p>Created at:<span>{{$auth->created_at}}</span></p>
                    <!-- <p>Updated at:<span>{{$auth->updated_at}}</span></p> -->
                </div>
            </div><br>

        <!--  menu -->
        <tr><a href="{{ route('task.home') }}" class="btn btn-link">MyPage</a></tr>
        
    </table>
    @endif
</div>
@endsection
