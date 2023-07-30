@extends('admin.index')

@section('content')



<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {!! Form::open(['url' => aurl('files'),'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title_ar', trans('admin.title_ar')) !!}
            {!! Form::text('title_ar',old('title_ar'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('title_en', trans('admin.title_en')) !!}
          {!! Form::text('title_en',old('title_en'),['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('description_ar', trans('admin.description_ar')) !!}
            {!! Form::textarea('description_ar',old('description_ar'),['class'=>'form-control summernote_description_ar']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description_en', trans('admin.description_en')) !!}
            {!! Form::textarea('description_en',old('description_en'),['class'=>'form-control summernote_description_en']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('activation', trans('admin.activation')) !!}
          {!! Form::select('active', ['1' => trans('admin.active'), '0' => trans('admin.inactive')],old('activation'),['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
          <label for="exampleInputFile">{{ trans('admin.file') }}</label>
          <div class="input-group">
            <div class="custom-file">
              {!! Form::label('file',trans('admin.file'),['class'=>'custom-file-label']) !!}
              {!! Form::file('file',['class'=>'custom-file-input']) !!}

            </div>
          </div>
        </div>


        <br/>


         {!! Form::submit(trans('admin.create'),['class' =>'btn btn-primary' ]) !!}

    {!! Form::close() !!}


    </div>
    <!-- /.card-body -->
  </div>






@endsection

@section('scripts')
    <script>
      $('.summernote_description_ar').summernote({
        tabsize: 2,
        height: 100
      });
    </script>
  <script>
      $('.summernote_description_en').summernote({
        tabsize: 2,
        height: 100
      });
    </script>
@endsection
