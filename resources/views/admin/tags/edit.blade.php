@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить тэг
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Меняем тэг</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">

                    <form action="{{route('admin.tags.update', ['tag' => $tag])}}" method='POST'>
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="" value="{{$tag->title}}">
                            </div>
                        </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('admin.tags.index')}}" class="btn btn-default">Назад</a>
                    <button  class="btn btn-warning pull-right">Изменить</button>
                </div>
                </form>
                <!-- /.box-footer-->

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
