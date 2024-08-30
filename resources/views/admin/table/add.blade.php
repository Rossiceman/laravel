@extends("admin.app")
@section("title", "動態表單")
@section("content")
<script>
    function doEvents(events)
    {
        if (events == "img")
        {
            doImg();
        }
    }

    function doImg()
    {
        alert("doImg");
    }
</script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="list" class="btn btn-secondary">回上頁</a>
            </div>
            <div class="card-body" id="getImg">
                <form method="post" id="form1" action="insert">
                    {{ csrf_field() }}
                    @foreach($s1 as $data1)
                    <div class="row mt-3">
                        <div class="col-2 text-end">{{ $data1->s1_name }}</div>
                        <div class="col-10">
                            <div class="row">
                                @foreach($s2 as $data2)
                                @continue($data2->s1 != $data1->id)
                                @if ($data2->newLine =="Y")
                            </div>
                            <div class="row">
                                @endif

                                @if (!empty($data2->s2_pre))
                                <div class="col-1 text-end">{{ $data2->s2_pre}}：</div>
                                @endif

                                <div class="col-{{ !empty($data2->col) ? $data2->col : "3" }} mx-3">
                                    @if ($data2->types == "R")
                                        @if (!empty($data2->events))
                                            <input type="radio" class="form-check-input border border-dark"
                                            name="s{{ $data1->id }}" value="{{ $data2->id }}" onclick="doEvents('{{ $data2->events }}')">
                                        @else
                                            <input type="radio" class="form-check-input border border-dark"
                                                name="s{{ $data1->id }}" value="{{ $data2->id }}">
                                        @endif
                                    @elseif($data2->types == "C")
                                    <input type="checkbox" class="form-check-input border border-dark"
                                        name="s{{ $data2->id }}" value="{{ $data2->id }}">
                                    @elseif($data2->types == "X")
                                    <input type="text" class="form-control border border-dark"
                                        name="s{{ $data2->id }}">
                                    @endif
                                    {{ $data2->s2_name }}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
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