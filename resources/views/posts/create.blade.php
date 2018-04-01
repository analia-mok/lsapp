@extends('layouts/app')

@section('content')
  <h1>Create Post</h1>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{ Form::label('title', 'Title') }}
      {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
      {{ Form::label('body', 'Body') }}
      {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}
    </div>
    <div class="form-group">
      {{ Form::file('cover_image') }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection

@section('scripts')
  <script>
    // FIXME: Broken after addition of Laravel Auth. Might need to do Laravel Auth from the beginner of
    // this project's setup before inclusion of the ckeditor provider
    //if(document.getElementById('article-ckeditor') != null){
      // CKEDITOR.destroy('article-ckeditor');
      //CKEDITOR.replace( 'article-ckeditor' );
  </script>
@endsection
