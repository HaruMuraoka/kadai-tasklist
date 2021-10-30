{!! Form::open(['route' => 'tasks.store']) !!}
    <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>  
    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
    
{!! Form::close() !!}