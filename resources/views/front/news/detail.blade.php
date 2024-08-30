@extends("front.comm")
@section("content")
<div data-scroll-watch="" class="fade_in title">
      <div class="breadcrumbs"><a href="/">首頁</a> / <a href="/news">最新消息</a> / <span>{{ $news->title }}</span></div>
    </div>
    <div class="news_detail">
      <div class="content">
        <div class="date">{{ $news->dates }}</div>
        <h3 class="main_title">{{ $news->title }}</h3>
        <p class="subtitle">{{ $news->subTitle }}</p>
        @if (!empty($news->photo))
        <img src="news/img/{{ $news->photo }}">
        @endif
        <p class="context">{!! $news->content !!}</p>
        
      </div>
    </div>
@endsection