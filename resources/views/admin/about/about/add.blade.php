@extends("admin.app")
@section("title", session()->get("aboutTitle"))
@section("content")
<script src="/js/html2canvas.min.js"></script>
<script>
    function doSave()
    {
        var img = document.querySelector("#getImg");
        
        html2canvas(img).then(function(canvas){
            data = canvas.toDataURL("image/png");
            $.ajax({
                url: "/admin/about/about/saveImg",
                type: "post",
                data:{
                    data: data,
                    _token: "{{ csrf_token() }}"
                },
                success: function(msg){
                    doNext();
                }
            });
        });
    }

    function doNext()
    {
        document.forms["form1"].action = "../insert";
        document.forms["form1"].submit();
    }
</script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="../list/{{ $typeId }}" class="btn btn-secondary">回上頁</a>
            </div>
            <div class="card-body" id="getImg">
                <form method="post" id="form1" enctype="multipart/form-data">
                    <input type="hidden" name="typeId" value="{{ $typeId }}">
                    {{ csrf_field() }}
                    <div class="row mt-3">
                        <div class="col-2 text-end">標題</div>
                        <div class="col-10">
                            <input type="text" class="form-control border border-dark" name="itemName">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">內容</div>
                        <div class="col-10">
                            <input type="text" name="content" class="form-control border border-dark">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">檔案</div>
                        <div class="col-10">
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-8 text-center">
                            <button type="button" class="btn btn-primary btn-lg" onclick="doSave()"> 儲 存 </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection