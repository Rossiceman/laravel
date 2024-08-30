@extends("admin.app")
@section("title", "廣告管理")
@section("content")
<link rel="stylesheet" href="/css/lightbox.min.css">
<script src="/js/lightbox.min.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row mb-3">
                    <div class="col-2">
                        <a class="btn btn-primary" href="add">新增</a>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-danger" href="javascript:doDelete('list')">刪除</a>
                    </div>
                </div>
                <form name="list" id="list" method="post" action="delete">
                    {{ csrf_field() }}
                    <table class="table border border-dark">
                        <tr class="table-warning">
                            <td class="col-1 text-center border border-dark">
                                <input type="checkbox" id="all" class="form-check-input">
                            </td>
                            <td class="col-3 text-center border border-dark">應用程式</td>
                            <td class="col-6 text-center border border-dark">圖檔</td>
                            <td class="col-2 text-center border border-dark">修改</td>
                        </tr>
                        @foreach($list as $data)
                        <tr>
                            <td class="text-center border border-dark">
                                <input type="checkbox" class="chk form-check-input border border-dark" name="id[]" value="{{ $data->id }}">
                            </td>
                            <td class="text-center border border-dark">{{ $data->ap_name }}</td>
                            <td class="text-center border border-dark">
                                @if (!empty($data->photo))
                                <a href="/images/banner/{{ $data->photo }}" data-lightbox="photo">
                                    <img src="/images/banner/S/{{ $data->photo }}"></a>
                                @endif
                            </td>
                            <td class="text-center border border-dark">
                                <a href="edit/{{ $data->id }}" class="btn btn-success">修改</a>
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