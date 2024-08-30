@extends("admin.app")
@section("title", "修改關於我們標題")
@section("content")

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="../list" class="btn btn-secondary">回上頁</a>
            </div>
            <div class="card-body">
                <form method="post" action="../update">
                    <input type="hidden" name="id" value="{{ $about->id }}">
                    {{ csrf_field() }}
                    <div class="row mt-3">
                        <div class="col-2 text-end">標題</div>
                        <div class="col-10">
                            <input type="text" class="form-control border border-dark" name="title" value="{{ $about->title }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">內容</div>
                        <div class="col-10">
                            <textarea class="form-control border border-dark" name="content" rows="5">
                                {{ str_replace("<br/>", "\n", $about->content) }}</textarea>
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