@extends('layouts.master')
@section('title')
	<h1 class="text-center">Coupons!</h1>
@endsection
@section('content')

	<div role="main">

		<div class="stripe-regular">
			<div class="row">
				<div class="large-12 columns">
					<article class="blog-post-content">
						<section class="article-main-content">

							<div class="wrapper-3 primary">
								<div class="row">
										<heading>
											<figure class="large-12" style="text-align: center">
												<img src="{{$img_link}}" alt="">
											</figure>
											<div class="large-12" style="text-align: center">
												<h2 style="font-size:1.2em; color: #000 !important;">{{$search_query}}</h2>
											</div>
										</heading>

										<div class="text-content">

										</div>

										<a class="input button dark secondary responsive right fixed share-button" href="{{$link}}">Product
											Page</a>
								</div>
							</div>
						</section>
						<section class="comments">
							<div class="row">
								<div class="large-8 columns">
									<h2>Related Coupons on {{strtoupper($store)}}</h2>
								</div>
							</div>
							@if(count($result) == 0)
								<p class="text">
									{{--No Results Match Your Search <b>‘{{$search_query}}’</b>. Please Try Again.--}}
								</p>
							@else
								@foreach($result as $res)
									<div class="wrapper-3 primary oh" style="margin-bottom:20px;">
										<article class="level-0">
											<div class="row">
												<div class="large-2 small-2 columns">
													<a href="{{$res->deal_link}}"
													   class="input button red secondary responsive activate_deal">Activate Deal </a>
												</div>
												<div class="large-10 small-10 columns">
													<p class="rr author">
														<span class="name">{{$res->title}}</span>
													</p>
													<div class="text-content">
														<p>
															{{$res->sub_title}}
														</p>
													</div>
												</div>
											</div>
										</article>
									</div>
								@endforeach
							@endif
						</section>
					</article>
				</div>
			</div>
		</div>
	</div>

@endsection
