<style>
    .hello{
        height: 1000px;
    }
</style>
@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid" style="width:100%; overflow:auto;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">thông tin
                    <small>List</small>
                </h1>
                
            </div>
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>title</th>
                        <th>content</th>
                        <th>published</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $p)
                        <tr class="hello">
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->content }}</td>
                            <td>{{ $p->published }}</td>
                            <td class="center">
                                <form action="{{ route('info.destroy', $p->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-trash-o fa-fw"></i> Xóa
                                    </button>
                                </form>
                            </td>
                            <td class="center">
                                <a href="{{ route('info.edit', $p->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil fa-fw"></i> Sửa
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
