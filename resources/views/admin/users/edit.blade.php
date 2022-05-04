@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить пользователя
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">


            <!-- Default box -->
            <div class="box">
                <form method="POST" action="{{route('admin.users.update',[$user->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-header with-border">
                        <h3 class="box-title">Добавляем пользователя</h3>
                        @include('admin.error')
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                       placeholder=""
                                       value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                       placeholder=""
                                       value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Пароль</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                                       placeholder="">
                            </div>
                            <div class="form-group">
                                <img src="{{asset("storage/". $user->avatar)}}" alt="" width="200"
                                     class="img-responsive">
                                <label for="exampleInputFile">Аватар</label>
                                <input type="file" name="avatar" id="exampleInputFile">

                                <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('admin.users.index')}}" class="btn btn-default">Назад</a>
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
