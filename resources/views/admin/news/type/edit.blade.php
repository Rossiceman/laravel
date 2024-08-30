@extends("admin.app")
@section("title","修改最新消息類別")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="../list" class="btn btn-info">回上頁</a>
            </div>
            <div class="card-body">
                <form method="post" action="../update">
                    <input type="hidden" name="id" value="{{ $type->id }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-2 text-end">類別</div>
                        <div class="col-4">
                            <input type="text" class="form-control border border-dark" name="title" required value="{{ $type->title }}">
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
@endsection