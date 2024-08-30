@extends("admin.app")
@section("title","最新消息類別")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-2">
                        <a class="btn btn-warning" href="add">新增</a>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-danger" href="javascript:doDelete('list')">刪除</a>
                    </div>
                </div>
                <form name="list" id="list" method="post" action="delete">
                    {{ csrf_field() }}
                    <table class="table border border-dark">
                        <tr class="table-warning">
                            <td class="col-1 text-center">
                                <input type="checkbox" id="all" class="form-check-input">
                            </td>
                            <td class="col-10 text-center">類別</td>
                            <td class="col-1 text-center">修改</td> 
                        </tr>
                        @foreach($list as $data)
                        <tr>
                            <td class="text-center border border-dark">
                                <input type="checkbox" class="chk form-check-input" name="id[]" value="{{ $data->id }}">
                            </td>
                            <td class="text-center border border-dark">{{ $data->title }}</td>
                            <td class="text-center border border-dark">
                                <a href="edit/{{ $data->id }}" class="btn btn-secondary">修改</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection