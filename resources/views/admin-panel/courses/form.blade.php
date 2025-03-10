<div class="form-group mb-6">
    <label for="simpleinput">اسم الدورة:</label>
    {!! Form::text('name',null,[
        'autocomplete'=> 'off',
        'class' => 'form-control'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">وصف الدورة:</label>
    {!! Form::textarea('description',null,[
        'autocomplete'=> 'off',
        'class' => 'form-control'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">الأقسام :</label>
    @inject('category','App\Models\Categories')

    {!! Form::select('category_id',$category->pluck('name','id'),null,[
        'placeholder' => 'إختر قسم',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">الوسوم :</label>
    @inject('tags','App\Models\Tag')

    {!! Form::select('tag_id[]',$tags->pluck('name','id'),null,[
        'multiple' => true,
        'class' => 'form-control form-control-select2',
        'value' => 'tags->id',

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">المواد :</label>
    @inject('subject','App\Models\Subject')

    {!! Form::select('subject_id',$subject->pluck('name','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>

<div class="form-group mb-6">
    <label for="simpleinput">الصفوف الدراسية :</label>
    @inject('class','App\Models\calss')

    {!! Form::select('class_id',$class->pluck('name','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">المدرس الملقي بالدورة :</label>
    @inject('teacher','App\Models\Teacher')

    {!! Form::select('teacher_id',$teacher->pluck('name','id'),null,[
        'placeholder' => 'اختر',
        'class' => 'form-control form-control-select2'

    ]) !!}
</div>


<div class="form-group mb-6">
    <label for="simpleinput">السعر:</label>
    {!! Form::number('price',null,[
        'autocomplete'=> 'off',
        'class' => 'form-control'

    ]) !!}
</div>

<!-- Bootstrap file input -->
<div class="card">
    <div class="card-body">
        <div class="form-group row">
            <label class="col-lg-2 col-form-label font-weight-semibold">الصورة:</label>
            <div class="col-lg-10">
                <input type="file" name="image" class="file-input form-control {{($model) ? $model->image : old('image')}}" data-show-caption="false" data-show-upload="false" data-fouc>
            </div>
        </div>
    </div>
</div>
<!-- /bootstrap file input -->

<!-- Bootstrap file input -->
<div class="card">
    <div class="card-body">
        <div class="form-group row">
            <label class="col-lg-2 col-form-label font-weight-semibold">PDF:</label>
            <div class="col-lg-10">
                <input type="file" name="pdf" class="file-input form-control  {{ $model->image}}" data-show-caption="false" data-show-upload="false" data-fouc>

            </div>
        </div>
    </div>
</div>
<!-- /bootstrap file input -->

