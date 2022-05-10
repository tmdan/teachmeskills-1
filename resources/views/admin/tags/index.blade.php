@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Тэги
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Доступные тэги</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('admin.tags.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="tags" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{"$tag->id"}}</td>
                                <td>{{"$tag->title"}}</td>
                                <td><a href="{{route('admin.tags.edit', $tag->slug)}}" class="fa fa-pencil"></a>
                                    <form method="POST" action="{{route('admin.tags.delete', $tag->slug)}}">
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
                    {{$tags->links()}}
                </div>
            </div>
        </section>
    </div>
@endsection
