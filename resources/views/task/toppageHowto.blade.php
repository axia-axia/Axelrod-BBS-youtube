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
                <br><h1 class="text-center">【ハウツー】</h1><br>
                <h1>登録済ウェブサイト</h1>

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
                <table class="table table-dark table-borderless">
                    <thead>
                        <tr>
                            <th style="width: 15%">画像</th>
                            <th style="width: 20%">タイトル</th>
                            <th style="width: 30%">説明</th>
                            <th style="width: 10%">URL</th>
                            <th style="width: 20%">[削除]</th>
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
                            <td>
                                <form action="{{ route('task.delete')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label style="font-size:9pt">メールアドレス</label>
                                        <input type="text" name="youremail" rows="1" cols="1" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size:9pt">削除パスワード</label>
                                        <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                                    </div>
                                    <input name="id" type="hidden" value="{{ $task->id }}">
                                    <input type="submit" value="削除" class="btn btn-primary" name="delete">
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
                <h1>登録</h1>
                <h6>Fill up bellow.</h6>
                <h5 style="text-decoration:underline"> [各種登録可能] 企業, 組織, 個人, グループ等</h5>
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
                        <label>1.タイトル[40文字以内]</label>
                        <input type="text" name="cname" rows="1" cols="1" value="{{old('cname')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>2.URL (正しいフォーマット)</label>
                        <textarea name="url" rows="1" cols="100" class="form-control" value="{{old('url')}}">{{old('url')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>3.説明 (3000文字以内)</label>
                        <textarea name="description" rows="5" cols="100" class="form-control"  value="{{old('url')}}">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>4.画像 (jpeg, jpg, png, bmb)</label><br>
                        <input type="file" name="thumbnail" value="{{old('thumbnail')}}" multiple="multiple"/>
                        {{ csrf_field() }}<br>
                    </div>
                    <div class="form-group">
                        <label>5.名前</label>
                        <input type="text" name="yourname"value="{{old('yourname')}}" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>6.メールアドレス (非表示)</label>
                        <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>8.削除パスワード (20字以内。非表示。)</label>
                        <input type="text" name="youremail" value="{{old('youremail')}}" rows="1" cols="1" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>9.登録カテゴリー</label>
                        <select class="form-control" id="category" name="category">
                        @foreach (\CategoryConst::CATEGORY_LIST as $name => $number)
                            <option value="{{ $name }}">{{ $number }} {{$name}}</option>
                        @endforeach
                    </div>

                    <input type="submit" value="登録" class="btn btn-primary" name="category">
                </form>

                <!-- center bottom -->
                <div class="card-body">
                    <p><a href="{{ route('task.toppage') }}" class="btn btn-link">トップに戻る</a></p>
                </div>
            </div>
        </div>
    </div>

            
    <!-- row7 -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h3>登録カテゴリー一覧</h3>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row text-left" style="padding-left:100px">
            <div class="col-3">
                <li> <a href="{{ route('task.toppageFood') }}">食品</a></li>
                <li> <a href="{{ route('task.toppageTravel') }}">旅行</a></li>
                <li> <a href="{{ route('task.toppageBeauty') }}">美容</a></li>
                <li> <a href="{{ route('task.toppageCulture') }}">文化</a></li>
                <li> <a href="{{ route('task.toppageArt') }}">アート</a></li>
            </div>
            <div class="col-3">
                <li> <a href="{{ route('task.toppageCharity') }}">慈善活動</a></li>
                <li> <a href="{{ route('task.toppageBusiness') }}">ビジネス</a></li>
                <li> <a href="{{ route('task.toppageTvMovie') }}">テレビ・映画</a></li>
                <li> <a href="{{ route('task.toppageAutomobile') }}">自動車・バイク等</a></li>
                <li> <a href="{{ route('task.toppageFinance') }}">金融</a></li>
            </div>
            <div class="col-3">
                <li> <a href="{{ route('task.toppageGame') }}">ゲーム</a></li>
                <li> <a href="{{ route('task.toppageLife') }}">生活</a></li>
                <li> <a href="{{ route('task.toppageMedical') }}">医療</a></li>
                <li> <a href="{{ route('task.toppageMusic') }}">音楽</a></li>
                <li> <a href="{{ route('task.toppageHowTo') }}">ハウツー</a></li>
            </div>
            <div class="col-3">
                <li> <a href="{{ route('task.toppageComputerMobile') }}">PC・モバイル</a></li>
                <li> <a href="{{ route('task.toppageScience') }}">サイエンス</a></li>
                <li> <a href="{{ route('task.toppageSports') }}">スポーツ</a></li>
                <li> <a href="{{ route('task.toppageDiy') }}">DIY</a></li>
                <li> <a href="{{ route('task.toppageBook') }}">本</a></li>
            </div>
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
                <br><h1 class="text-center">【ハウツー】</h1><br>
                <h1>登録済ウェブサイト</h1>

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
            <h6 class="text-center">端末: {{ $agent }}<h6>
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
                            <th style="width: 100%; text-align:center;">タイトル</th>
                        </tr>
                        <tr>
                            <td>{{ $task->cname }}</td>
                        </tr>
                        <tr>
                        <th style="width: 100%; text-align:center;">画像</th>
                        </tr>
                        <td class="col-4">
                            @if ($task->thumbnail !=='')
                            <img src="{{ \Storage::url('img/'.$task->thumbnail) }}">
                            @else
                            <img src="{{ \Storage::url('img/no_image.png') }}">
                            @endif
                        </td>
                        <tr>
                        <th style="width: 100%; text-align:center;">説明</th>
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
                        <th style="width: 100%; text-align:center;">[削除]</th>
                        </tr>
                        <tr>
                            <td>
                                <form action="{{ route('task.delete')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label style="font-size:9pt">メールアドレス (非表示)</label>
                                        <input type="text" name="youremail" rows="1" cols="1" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size:9pt">削除用パスワード (非表示)</label>
                                        <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                                    </div>
                                    <input name="id" type="hidden" value="{{ $task->id }}">
                                    <input type="submit" value="DELETE" class="btn btn-primary" name="delete">
                                </form>
                            </td>
                        </tr>
                        <tr>
                        <td><br></td><td><br></td><td><br></td><td><br></td>
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
                <h1>登録はこちらから</h1>
                <h6>以下を埋めてください。</h6>
                <h5 style="text-decoration:underline">[各種登録可能] 企業, 組織, 個人, グループ等</h5>
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
                        <label>1.タイトル[40文字以内]</label>
                        <input type="text" name="cname" rows="1" cols="1" value="{{old('cname')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>2.URL (正しいフォーマット)</label>
                        <textarea name="url" rows="1" cols="100" class="form-control" value="{{old('url')}}">{{old('url')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>3.説明 (3000文字以内)</label>
                        <textarea name="description" rows="5" cols="100" class="form-control"  value="{{old('url')}}">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>4.画像 (jpeg, jpg, png, bmb)</label><br>
                        <input type="file" name="thumbnail" value="{{old('thumbnail')}}" multiple="multiple"/>
                        {{ csrf_field() }}<br>
                    </div>
                    <div class="form-group">
                        <label>5.名前</label>
                        <input type="text" name="yourname"value="{{old('yourname')}}" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>6.メールアドレス (非表示)</label>
                        <input type="text" name="delete_pass" rows="1" cols="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>8.削除用パスワード (20字以内。非表示。)</label>
                        <input type="text" name="youremail" value="{{old('youremail')}}" rows="1" cols="1" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>9.登録カテゴリー</label>
                        <select class="form-control" id="category" name="category">
                        @foreach (\CategoryConst::CATEGORY_LIST as $name => $number)
                            <option value="{{ $name }}">{{ $number }} {{$name}}</option>
                        @endforeach
                    </div>

                    <input type="submit" value="登録" class="btn btn-primary" name="category">
                </form>

                <!-- center bottom -->
                <div class="card-body">
                    <p><a href="{{ route('task.toppage') }}" class="btn btn-link">トップに戻る</a></p>
                </div>
            </div>
        </div>
    </div>

            
    <!-- row7 -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h3>登録カテゴリー一覧</h3>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-12">
                <li> <a href="{{ route('task.toppageFood') }}">食品</a></li>
                <li> <a href="{{ route('task.toppageTravel') }}">旅行</a></li>
                <li> <a href="{{ route('task.toppageBeauty') }}">美容</a></li>
                <li> <a href="{{ route('task.toppageCulture') }}">文化</a></li>
                <li> <a href="{{ route('task.toppageArt') }}">アート</a></li>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-12">
                <li> <a href="{{ route('task.toppageCharity') }}">慈善活動</a></li>
                <li> <a href="{{ route('task.toppageBusiness') }}">ビジネス</a></li>
                <li> <a href="{{ route('task.toppageTvMovie') }}">TV・映画</a></li>
                <li> <a href="{{ route('task.toppageAutomobile') }}">自動車・バイク等</a></li>
                <li> <a href="{{ route('task.toppageFinance') }}">金融</a></li>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-12">
                <li> <a href="{{ route('task.toppageGame') }}">ゲーム</a></li>
                <li> <a href="{{ route('task.toppageLife') }}">生活</a></li>
                <li> <a href="{{ route('task.toppageMedical') }}">医療</a></li>
                <li> <a href="{{ route('task.toppageMusic') }}">音楽</a></li>
                <li> <a href="{{ route('task.toppageHowTo') }}">ハウツー</a></li>
            </div>
    

    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-12">
                <li> <a href="{{ route('task.toppageComputerMobile') }}">PC・モバイル等</a></li>
                <li> <a href="{{ route('task.toppageScience') }}">サイエンス</a></li>
                <li> <a href="{{ route('task.toppageSports') }}">スポーツ</a></li>
                <li> <a href="{{ route('task.toppageDiy') }}">DIY</a></li>
                <li> <a href="{{ route('task.toppageBook') }}">本</a></li>
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



