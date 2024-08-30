@extends("front.comm")
@section("content")
<!-- about的title CSS-->
<link rel="stylesheet" type="text/css" href="/css/front/about/about.css">
<!-- timeline的 CSS-->
<link rel="stylesheet" type="text/css" href="/css/front/about/timeline.css">
<div data-scroll-watch="" class="fade_in title">
    <div class="breadcrumbs"><a href="/">首頁</a> / <span>關於</span></div>
    <h1 class="top_title">About</h1>
    @if (!empty(session()->get("bannerabout")))
    <div class="top_banner">
        <img src="/images/banner/{{ session()->get("bannerabout") }}" alt="About">
    </div>
    @endif
</div>
<div data-scroll-watch="" class="fade_in esontea">
    <section data-scroll-watch="" class="fade_in">
        <p class="subtitle">
            @foreach($title as $data)
                @if ($data->typeId == 1)
                    {!! $data->content !!}
                    @break
                @endif
            @endforeach
        </p>
    </section>
</div>
@foreach($title as $data)
    @continue($data->typeId != 2)
<div data-scroll-watch="" class="fade_in content_title">
    <h2 class="main_title">{{ $data->title }}</h2>
    <div class="subtitle">{!! $data->content !!}</div>
</div>
@endforeach

@if (!empty($about) && sizeof($about)>0)
<div class="idea">
    @foreach($about as $data)
    <section data-scroll-watch="" class="fade_in">
        @if (!empty($data->photo))
        <img src="/images/about/{{ $data->photo }}">
        @endif
        <h3 class="main_title">{{ $data->item_name }}</h3>
        <p class="subtitle">{{ $data->content }}</p>
    </section>
    @endforeach
</div>
@endif

@foreach($title as $data)
    @continue($data->typeId != 3)
<div data-scroll-watch="" class="fade_in content_title">
    <h2 class="main_title">{{ $data->title }}</h2>
    <div class="subtitle">{!! $data->content !!}</div>
</div>
@endforeach

@if (!empty($advance) && sizeof($advance)>0)
<div class="strength">
    @foreach($advance as $data)
    <section data-scroll-watch="" class="fade_in">
        @if (!empty($data->photo))
        <img src="/images/about/{{ $data->photo }}">
        @endif
        <h3 class="main_title">{{ $data->item_name }}</h3>
        <p class="subtitle">{{ $data->content }}</p>
    </section>
    @endforeach
</div>
@endif

@foreach($title as $data)
    @continue($data->typeId !=4)
<div data-scroll-watch="" class="fade_in content_title">
        <h3 class="main_title">{{ $data->title }}</h3>
        <div class="subtitle">{!! $data->content !!}</div>
</div>
@endforeach
    </section>
    <section data-scroll-watch="" class="fade_in"><img src="about/img/strength_3.jpg">
        <h3 class="main_title">主打大禹嶺高山茶</h3>
        <p class="subtitle">熟悉茶葉的行家，都知道大禹嶺茶以及其他高山茶類產量非常少。xx主打大禹嶺茶，供應量大，提供顧客安全的選擇。</p>
    </section>
    <section data-scroll-watch="" class="fade_in"><img src="about/img/strength_4.jpg">
        <h3 class="main_title">純正台灣味不混茶</h3>
        <p class="subtitle">主打純正的台灣品牌茶，不參任何添加物、不混茶，並藉由買賣的過程，教育消費者關於茶葉的知識，並透過品牌識別，朝向國際品牌的方向邁進！</p>
    </section>
</div>
@foreach($title as $data)
    @continue($data->typeId != 4)
<div data-scroll-watch="" class="fade_in content_title">
    <h2 class="main_title">{{ $data->title }}</h2>
    <div class="subtitle">{!! $data->content !!}</div>
</div>
@endforeach
@if (!empty($event) && sizeof($event))
<div data-scroll-watch="" class="fade_in eson_timeline">
    <div class="col-md-12">
        <div class="main-timeline">
            @php $cnt = 0; @endphp
            @foreach($event as $data)
            @php $cnt++ ; @endphp
            <div class="timeline">
                <div class="timeline-icon"></div>
                <div class="timeline-content{{ $cnt % 2 ==0? ' right ' : '' }}">
                    <h2 class="title">{{}}</h2>
                    <p class="description">熟悉茶葉的行家，都知道大禹嶺茶以及其他高山茶類產量非常少。xx主打大禹嶺茶，供應量大，提供顧客安全的選擇。</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@endsection