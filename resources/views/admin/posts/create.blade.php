@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить статью
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Добавляем статью</h3>

            @include('admin.errors')


          </div>

          <div class="box-body">
            <div class="col-md-6">


              <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{old('title')}}">
              </div>


              <div class="form-group">
                <label for="exampleInputFile">Картинка</label>
                <input type="file" id="image" name="image">
              </div>


              <div class="form-group">

                <label for="cars">Категория</label>

                <select name="category_id" class="form-control select2" id="categories">


                  @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                  @endforeach

                </select>


              </div>


              <div class="form-group">

                <label>Теги</label>


                <select name="tags[]" class="form-control select2" id="cars" multiple>

                  @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}} </option>
                  @endforeach
                </select>


              </div>


              <!-- checkbox -->
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" name="is_recommended" value="1">
                </label>
                <label>
                  Рекомендованный
                </label>
              </div>

              <!-- checkbox -->
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" name="is_publish" value="1">
                </label>
                <label>
                  Публичный
                </label>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Контент</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button class="btn btn-default">Назад</button>
            <button class="btn btn-success pull-right">Добавить</button>
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection