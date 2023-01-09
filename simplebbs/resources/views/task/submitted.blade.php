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
            <h1>SUBMITTED SUCESSFULLY!!</h1>
            <h6>※ You can boost more your channels registering to other  categories!</h6>
            <hr>
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
            <div class="card-body text-center">
                <p><a href="{{ route('task.create') }}" class="btn btn-outline-success">Creat new</a></p>
                <p><a href="{{ route('task.toppage') }}" class="btn btn-link">MyPage</a></p>
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
                <h1 style="text-align:center">SUBMITTED SUCESSFULLY!!</h1>
                <h6>※Boost more your channels to other categories!!</h6>
            </tr><br><br>

            <!-- adv left -->
            <tr>
                <td>
                <!-- admax -->
            <script src="https://adm.shinobi.jp/s/6f18cf5c29638a99d9b905873c7c3b68"></script>
            <!-- admax -->
                </td>
            </tr><br><br>

             <!-- menu -->
            <hr>
            <h3 style="text-align:center">Menu</h3>
            <hr>
            <tr><a href="{{ route('task.create') }}" class="btn btn-primary">Creat new</a></tr><br><br>
            <tr><a href="{{ route('task.toppage') }}">MyPage</a></tr><br><br>

        </table>
    @endif
</div>
@endsection