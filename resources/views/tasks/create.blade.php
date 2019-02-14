@extends("layouts.app")

@section("content")
    <h1>タスク新規作成ページ</h1>
    
    <div class="row">
        <div class="col-8"></div>
            {!! Form::model($task, ["route" => "tasks.store"]) !!}
                {!! Form::label("content", "タスク:") !!}
                {!! Form::text("content", null, ["class" => "form-control"]) !!}
                {!! From::submit("作成") !!}
            {!! Form::close() !!}
        
    </div>

@endsection