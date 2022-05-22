@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            {{--<form action="{{route('admin.posts.store')}}" enctype="multipart/form-data" method="POST">--}}

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                    @include('admin.errors')
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('admin.posts.create')}}" class="btn btn-success">Добавить</a>
                        {{ $posts->links('vendor.pagination.default') }}
                    </div>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Теги</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->getCategoryTitle()}}</td>
                            <td>{{$post->getTagsTitles()}}</td>
                            <td>
                                <img src="{{asset("storage/". $post->image)}}" alt="" width="100">
                            </td>
                            <td>
                                <a href="{{route('admin.posts.edit', $post->id)}}" class="fa fa-pencil"></a>
                                <form method="POST" action="{{route("admin.posts.delete", $post->id)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="delete">
                                        <a class="fa fa-remove"></a>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        </tfoot>

                    </table>

                </div>
                <!-- /.box-body -->



            </div>
            <!-- /.box -->

           {{--</form>--}}

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
