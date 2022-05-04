@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить статью
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{route('admin.posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Обновляем статью</h3>
                        @include('admin.errors')
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                       value="{{$post->title}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Лицевая картинка</label>
                                <br>



                                <img src="{{asset("storage/". $post->image)}}" alt="" class="img-responsive" width="200">
                                <br>
                                <input type="file" id="exampleInputFile" name="image">
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <select name="category_id" class="form-control select2" style="width: 100%;"
                                        data-placeholder="Выберите категорию">
                                    @foreach($categories as $id => $value)
                                        @if($id == $post->category_id)
                                            <option value="{{$id}}" selected>{{$value}}</option>
                                        @else
                                            <option value="{{$id}}">{{$value}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Теги</label>
                                <select name="tags[]" class="form-control select2" multiple="multiple"
                                        data-placeholder="Выберите теги" style="width: 100%;">
                                        @foreach($tags  as $id => $value)
                                            @if(in_array($id, $selectedTags))
                                                <option value="{{$id}}" selected>{{$value}}</option>
                                            @else
                                                <option value="{{$id}}">{{$value}}</option>
                                            @endif
                                        @endforeach
                                </select>
                            </div>

                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    @if($post->is_recommended == true)
                                        <input type="checkbox" name="is_recommended"  value="1" class="minimal" checked>
                                    @else
                                        <input type="checkbox" name="is_recommended"  value="1"  class="minimal">
                                    @endif
                                </label>
                                <label>Рекомендовать</label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    @if($post->is_published)
                                        <input type="checkbox" name='is_published'  value="1"  class="minimal" checked>
                                    @else
                                        <input type="checkbox" name='is_published'  value="1"  class="minimal">
                                    @endif
                                </label>
                                <label>Опубликовать</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{route('admin.posts.index')}} " class="btn btn-default">Назад</a>
                        <button class="btn btn-warning pull-right">Изменить</button>
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
