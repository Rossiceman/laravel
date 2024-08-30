@extends("admin.app")
@section("title","新增最新消息")
@section("content")
<link rel="stylesheet" href="/css/admin/ckeditor.css">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="list" class="btn btn-info">回上頁</a>
            </div>
            <div class="card-body">
                <form method="post" action="insert" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-2 text-end">類別</div>
                        <div class="col-4">
                            <select name="typeId" class="form-control border border-dark" require>
                                <option value="">請選擇類別</option>
                                @foreach($list as $data)
                                <option value="{{ $data->id }}">{{ $data->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">標題</div>
                        <div class="col-10">
                        <input type="text" class="form-control border border-dark" name="title" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">次標題</div>
                        <div class="col-10">
                        <input type="text" class="form-control border border-dark" name="subTitle" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">日期</div>
                        <div class="col-3">
                            <input type="date" class="form-control border border-dark" name="dates" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">內容</div>
                        <div class="col-10">
                            <textarea class="form-control editor" id="editor" name="content"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">圖檔</div>
                        <div class="col-3">
                            <input type="file" class="form-control border border-dark" name="photo" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-8 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">儲存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>
<script src="/js/admin/editor.js"></script>
@endsection