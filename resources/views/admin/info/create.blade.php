@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
                <form action="{{ route('info.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    
                    <div class="form-group">
                        <label>title</label>
                        <input class="form-control" type="text" name="title" />
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input class="form-control" type="text" name="content" />
                    </div>
                    <div class="form-group">
                        <label>published</label>
                        <input class="form-control" type="date" name="published" />
                    </div>
                    
                    <button type="submit" class="btn btn-default">Thêm danh mục</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection