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
    
    <!-- 　                 　　 PC                     -->

    @if($agent ==='pc')
        
    <!-- row1 -->
    <div class="row  text-center">
        <div class="col">
            <h3>CATEGORIES</h3>
            <h6>You can register to other suitable categories bellow.</h6>
        </div>
    </div>
    
    <!-- row2 -->
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
            <h1>Registered!</h1>
            <h6></h6>
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
                <p><a href="{{ route('task.toppage') }}" class="btn btn-link">Back to Top page</a></p>
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

    
    
    <!-- 　                  mobile                     -->
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
                <h1 style="text-align:center">Registered!</h1>
                <h6>You can register to other suitable categories bellow.</h6>
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

            <tr><a href="{{ route('task.toppage') }}" class="btn btn-primary">Registere to other category</a></tr><br><br>
            <tr><a href="{{ route('task.toppage') }}">Back to Top page.</a></tr><br><br>

        </table>
    @endif
</div>
@endsection