@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить статью
                <small>приятные слова..</small>
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
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder=""
                                       value="{{$post->title}}">
                            </div>

                            <div class="form-group">
                                <img src="{{asset("storage/". $post->image)}}" alt="" class="img-responsive"
                                     width="200">
                                <label for="exampleInputFile">Лицевая картинка</label>
                                <input type="file" id="exampleInputFile" name="image">

                                <p class="help-block">Какое-нибудь уведомление о форматах..</p>
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
                                        @if(in_array($id, $post_tag))
                                            <option value="{{$id}}" selected>{{$value}}</option>
                                        @else
                                            <option value="{{$id}}">{{$value}}</option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label>Дата:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker"
                                           value="{{$post->date}}" name="date">
                                </div>
                                <!-- /.input group -->
                            </div>

                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    @if($post->is_recommended == 1)
                                        <input type="checkbox" name="is_recommended" class="minimal" checked>
                                    @else
                                        <input type="checkbox" name="is_recommended" class="minimal">
                                    @endif
                                </label>
                                <label>Рекомендовать</label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    @if($post->is_publish)
                                        <input type="checkbox" name='is_publish' class="minimal" >
                                    @else
                                        <input type="checkbox" name='is_publish' class="minimal" checked>
                                    @endif
                                </label>
                                <label>Черновик</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea id="" cols="30" rows="10" class="form-control"
                                          name="description">{{$post->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea name="content" id="" cols="30" rows="10"
                                          class="form-control">{{$post->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
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
