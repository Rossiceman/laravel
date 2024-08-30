@extends("admin.app")
@section("title", "新增記事")
@section("content")
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
<script>
    $(function() {
        $("#dates").datepicker(
            { 
                dateFormat: 'yy-mm-dd',
                changeYear: true,
                changeMonth: true,
                yearRange: "-10:+1"
            }
        );
    });
</script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="list" class="btn btn-secondary">回上頁</a>
            </div>
            <div class="card-body">
                <form method="post" action="insert">
                    {{ csrf_field() }}
                    <div class="row mt-3">
                        <div class="col-2 text-end">日期</div>
                        <div class="col-2">
                            <input type="text" class="form-control border border-dark" name="dates" id="dates" readonly>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">內容</div>
                        <div class="col-10">
                            <input type="text" class="form-control border border-dark" name="content">
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