@extends("admin.app")
@section("title", "新增廣告")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="list" class="btn btn-secondary">回上頁</a>
            </div>
            <div class="card-body" id="getImg">
                <form method="post" id="form1" enctype="multipart/form-data" action="insert">
                    {{ csrf_field() }}
                    <div class="row mt-3">
                        <div class="col-2 text-end">應用程式</div>
                        <div class="col-3">
                            <select name="apId" class="form-control" required>
                                <option value=""></option>
                                @foreach($list as $data)
                                <option value="{{ $data->id }}">{{ $data->ap_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 text-end">檔案</div>
                        <div class="col-10">
                            <input type="file" name="photo" class="form-control" required>
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
@endsection