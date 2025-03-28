
<div class="panel panel-default">

    <div class="panel-body">
        <div  class="form-group mb-6">
            <div class="col-xs-12 form-group">
                {!! Form::label('question_id', 'السؤال *', ['class' => 'control-label']) !!}
                {!! Form::select('question_id', $questions, old('question_id'), ['autocomplete'=> 'off','class' => 'form-control']) !!}
                <p class="help-block"></p>
                @if($errors->has('question_id'))
                    <p class="help-block">
                        {{ $errors->first('question_id') }}
                    </p>
                @endif
            </div>
        </div>
        <div  class="form-group mb-6">
            <div class="col-xs-12 form-group">
                {!! Form::label('option', 'الأختيار *', ['class' => 'control-label']) !!}
                {!! Form::text('option', old('option'), ['autocomplete'=> 'off','class' => 'form-control', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('option'))
                    <p class="help-block">
                        {{ $errors->first('option') }}
                    </p>
                @endif
            </div>
        </div>
        <div  class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('correct', 'هل هذا الاختيار الصحيح ؟ ', ['class' => 'control-label']) !!}
                {!! Form::hidden('correct', 0) !!}
                {!! Form::checkbox('correct', 1, 0, ['class' => 'form-control']) !!}
                <p class="help-block"></p>
                @if($errors->has('correct'))
                    <p class="help-block">
                        {{ $errors->first('correct') }}
                    </p>
                @endif
            </div>
        </div>

    </div>
</div>

