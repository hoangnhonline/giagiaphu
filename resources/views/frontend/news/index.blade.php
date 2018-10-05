@extends('frontend.layout')

@section('content')
<div class="block-headline-detail container">
  <ul class="breadcrumb breadcrumb-customize">
      <li><a href="{{ route('home') }}">{{ trans('text.home') }}</a></li>
      <li><a href="{{ $lang == 'vi' ? route('news-vi') : route('news-en') }}">{{ $lang == 'vi' ? "Tin tức" : "News" }}</a></li>
  </ul>
</div>
<div class="container page">
<div class="row">
	
	@include('frontend.detail.sidebar')
	<div class="block-main col-lg-9 col-md-8 col-sm-8">
		<div class="page-view">

			<div class="title-page">
				<h2 class="page-title">{{ trans('text.news') }}</h2>
			</div>

			<div class="clearfix"></div>

			<div class="page-layout-2columns page-child grid page-child-grid">
				<div class="page-child-items row">
					@if($articlesList->count() > 0)
					@foreach($articlesList as $articles)
					<div class="page-child-item">
                        <div class="news-item">
							<div class="news-img">
								<a title="{{ $articles->title }}" href="{{ $lang == 'vi' ? route('news-detail-vi', [$articles->slug, $articles->id]) : route('news-detail-en', [$articles->slug, $articles->id]) }}">
									<img class="lazy" src="{{ Helper::showImage($articles->image_url) }}" alt="{{ $articles->title }}">
								</a>
							</div>
							<div class="news-info">
								<h2 class="news-info-name">
									<a title="{{ $articles->title }}" href="{{ $lang == 'vi' ? route('news-detail-vi', [$articles->slug, $articles->id]) : route('news-detail-en', [$articles->slug, $articles->id]) }}">{{ $articles->title }}</a>
								</h2>
								<p class="news-contents">{{ $articles->description }}</p>
							</div>
						</div>
                    </div><!-- end page child item -->
                    @endforeach
                    @endif

				</div><!-- end page child items -->

				<div class="text-center">
                   {{ $articlesList->links() }}
                </div><!-- pagination -->
			</div>

		</div><!--/ end product-view -->
	</div><!--/ end block-main -->

	<div class="clearfix"></div>

</div>
</div>
@endsection