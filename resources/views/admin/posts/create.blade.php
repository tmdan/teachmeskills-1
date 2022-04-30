@extends('admin.layout')

@section('content')
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

            <!-- Default box -->
            <div class="box">
                <form method="POST" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
                    @csrf
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем статью</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" name="image" id="exampleInputFile">

                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            <select class="form-control select2" data-placeholder="Выберите категорию" style="width: 100%;">
                                @foreach($categories as $category)
                                <option selected="selected"></option>
                                <option>{{$category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Теги</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                               @foreach($tags as $tag)
                                <option>{{$tag}}</option>
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
                                <input type="text" name="date" class="form-control pull-right" id="datepicker">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="is_recommended" class="minimal">
                            </label>
                            <label>
                                Рекомендовать
                            </label>
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="is_published" class="minimal">
                            </label>
                            <label>
                                Опубликовать
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Полный текст</label>
                            <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('admin.posts.index')}} " class="btn btn-default">Назад</a>
                    <button class="btn btn-success pull-right">Добавить</button>
                </div>
                <!-- /.box-footer-->
                </form>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
@endsection
