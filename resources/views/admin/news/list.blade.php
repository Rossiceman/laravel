@extends("admin.app")
@section("title","最新消息")
@section("content")
<link rel="stylesheet" href="/css/lightbox.min.css" >
<script src="/js/lightbox.min.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 1,
      'wrapAround': true
    })
</script>

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
                    <div class="col-2">
                        <a class="btn btn-success" href="export">匯出</a>
                    </div>
                </div>
                <form name="list" id="list" method="post" action="delete">
                    {{ csrf_field() }}
                    <table class="table border border-dark">
                        <tr class="table-warning">
                            <td class="col-1 text-center">
                                <input type="checkbox" id="all" class="form-check-input">
                            </td>
                            <td class="col-2 text-center border border-dark">類別</td>
                            <td class="col-2 text-center border border-dark">標題</td>
                            <td class="col-4 text-center border border-dark">次標題</td>
                            <td class="col-2 text-center border border-dark">圖檔</td>
                            <td class="col-1 text-center border border-dark">修改</td>
                            <td class="col-1 text-center border border-dark">Word</td>
                        </tr>
                        @foreach($list as $data)
                        <tr>
                            <td class="text-center border border-dark">
                                <input type="checkbox" class="chk form-check-input" name="id[]" value="{{ $data->id }}">
                            </td>
                            <td class="text-center border border-dark">{{ $data->types }}</td>
                            <td class="text-center border border-dark">{{ $data->title }}</td>
                            <td class="text-center border border-dark">{!! $data->subTitle !!}</td>
                            <td class="text-center border border-dark">
                                @if (!empty($data->photo))
                                <a href="/images/news/{{ $data->photo }}" data-lightbox="photo">
                                <img src="/images/news/{{ $data->photo }}" width="100"></a>
                                @endif
                            </td>
                            <td class="text-center border border-dark"> 
                                <a href="edit/{{ $data->id }}" class="btn btn-secondary">修改</a>
                            </td>
                            <td class="text-center border border-dark"> 
                                <a href="word/{{ $data->id }}" class="btn btn-info">匯出</a>
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