@extends("admin.app")
@section("title", "修改". session()->get("aboutTitle"))
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="../../list/{{ $typeId }}" class="btn btn-secondary">回上頁</a>
            </div>
            <div class="card-body">
                <form method="post" action="../../update" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="hidden" name="typeId" value="{{ $typeId }}">
                    {{ csrf_field() }}
                    <div class="row mt-3">
                        <div class="col-2 text-end">標題</div>
                        <div class="col-10">
                            <input type="text" class="form-control border border-dark" name="itemName" value="{{ $item->item_name }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">內容</div>
                        <div class="col-10">
                            <input type="text" name="content" class="form-control border border-dark" value="{{ $item->content }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">檔案</div>
                        <div class="col-10">
                            <input type="file" name="photo" class="form-control">
                            @if (!empty($item->photo))
                            <div><img src="/images/about/S/{{ $item->photo }}"></div>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-8 text-center">
                            <button type="submit" class="btn btn-primary btn-lg"> 儲 存 </button>
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