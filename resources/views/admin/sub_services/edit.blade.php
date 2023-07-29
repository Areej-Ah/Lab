@extends('admin.index')

@section('content')



<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {!! Form::open(['url' => aurl('sub_services/'.$subService->id),'method' => 'put','files'=>true]) !!}


      <div class="form-group">
            {!! Form::label('title_ar', trans('admin.title_ar')) !!}
            {!! Form::text('title_ar',$subService->title_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('title_en', trans('admin.title_en')) !!}
          {!! Form::text('title_en',$subService->title_en,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('description_ar', trans('admin.description_ar')) !!}
            {!! Form::textarea('description_ar',$subService->description_ar,['class'=>'form-control summernote_description_ar']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description_en', trans('admin.description_en')) !!}
            {!! Form::textarea('description_en',$subService->description_en,['class'=>'form-control summernote_description_en']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('activation', trans('admin.activation')) !!}
        {!! Form::select('active', ['1' => trans('admin.active'), '0' => trans('admin.inactive')],$subService->active,['class'=>'form-control']) !!}
       </div>



        <div class="form-group">
          <label for="exampleInputFile">{{ trans('admin.image') }}</label>
          <div class="input-group">
            <div class="custom-file">
              {!! Form::label('image',trans('admin.image'),['class'=>'custom-file-label']) !!}
              {!! Form::file('image',['class'=>'custom-file-input']) !!}

            </div>
          </div>

          @if(!empty($subService->image))
            <br/>
            <div class="col-md-3 col-sm-12">
            <div class="info-box bg-light">
              <div class="info-box-content">

              <center> <img style="width:auto; height:80px;" src="{{ Storage::url($subService->image) }}" /></center>

              </span></span></div>
            </div>
            </div>
            <br/>
          @endif

        </div>
        <br/>



         {!! Form::submit(trans('admin.edit'),['class' =>'btn btn-primary' ]) !!}

    {!! Form::close() !!}


    </div>
    <!-- /.card-body -->
  </div>






@endsection

@section('scripts')

    <script>
      $('.summernote_description_ar').summernote({
        placeholder: '{{$subService->description_ar}}',
        tabsize: 2,
        height: 100
      });
    </script>
  <script>
      $('.summernote_description_en').summernote({
        placeholder: '{{$subService->description_en}}',
        tabsize: 2,
        height: 100
      });
    </script>
@endsection
