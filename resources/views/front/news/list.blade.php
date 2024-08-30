@extends("front.comm")
@section("content")
<script src="/js/jquery.js"></script>
<script>
    $(document).ready(function(){
        getNews();
    });
    
    function getNews()
    {   
        
        let year = $("#year").val();
        var typeId = $("#typeId").val();
        $.ajax({
            url:"/news/getNews",
            type:"post",
            data:{
                year:year,
                typeId:typeId,
                _token: "{{ csrf_token() }}"
            },
            success:function(msg){
                $("#list").html(msg);
            }
        });

    }
</script>
<div data-scroll-watch="" class="fade_in title">
    <div class="breadcrumbs"><a href="/">首頁</a> / <span>最新消息</span></div>
    <h1 class="top_title">News</h1>
    <div class="top_banner">
        <img src="/commons/else/img/banner_news.jpg" alt="News">
    </div>
</div>
<div class="abgne_tab">
    <ul class="chooes">
        <li>
            <select id="year" onchange="getNews()">
                <option value="">所有年份</option>
                @foreach($year as $data)
                <option value="{{ $data->year }}">{{ $data->year }}</option>
                @endforeach
            </select>
        </li>
        <li>
            <select id="typeId" onchange="getNews()">
                <option value="">所有消息</option>
                @foreach($types as $data)
                <option value="{{ $data->id }}">{{ $data->title }}</option>
                @endforeach
            </select>
        </li>
    </ul>
    <ul class="tabs">
        <li><a href="#tab2"><i aria-hidden="true" class="fa fa-bars"></i></a></li>
        <li><a href="#tab1"><i aria-hidden="true" class="fa fa-th"></i></a></li>
    </ul>
<div id="list">

</div>
@endsection