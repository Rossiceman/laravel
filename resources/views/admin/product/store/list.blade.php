@extends("admin.app")
@section("title", "商店管理")
@section("content")
<script>
    function delStore(id, title) {
        Swal.fire({
            title: "確定刪除[" + title + "]?",
            text: "",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "確定刪除",
            cancelButtonText: "不刪了"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/product/store/delete",
                    type: "post",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(msg)
                    {
                        Swal.fire("[" + title + "] 已刪除");
                        $("#row" + id).remove();
                    }
                });
            }
        });
    }
</script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row mb-3">
                    <div class="col-2">
                        <a class="btn btn-primary" href="add">新增</a>
                    </div>
                </div>
                <table class="table border border-dark">
                    <tr class="table-warning">
                        <td class="col-8 text-center border border-dark">商店</td>
                        <td class="col-2 text-center border border-dark">修改</td>
                        <td class="col-2 text-center border border-dark">刪除</td>
                    </tr>
                    @foreach($list as $data)
                    <tr id="row{{ $data->id }}">
                        <td class="text-center border border-dark">{{ $data->title }}</td>
                        <td class="text-center border border-dark">
                            <a href="edit/{{ $data->id }}" class="btn btn-success">修改</a>
                        </td>
                        <td class="text-center border border-dark">
                            <a href="javascript:delStore('{{ $data->id }}', '{{ $data->title }}')" class="btn btn-danger">刪除</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection