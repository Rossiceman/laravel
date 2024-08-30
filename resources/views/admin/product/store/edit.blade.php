@extends("admin.app")
@section("title", "修改商店")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="../list" class="btn btn-secondary">回上頁</a>
            </div>
            <div class="card-body">
                <form method="post" action="../update">
                    <input type="hidden" name="id" value="{{ $store->id }}">
                    {{ csrf_field() }}
                    <div class="row mt-3">
                        <div class="col-2 text-end">商店名稱</div>
                        <div class="col-10">
                            <input type="text" class="form-control border border-dark" 
                                name="title" required value="{{ $store->title }}">
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