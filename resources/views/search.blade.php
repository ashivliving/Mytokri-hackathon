@extends('layouts.master')
@section('title')
	<h1 class="text-center">Search Result</h1>
@endsection
@section('content')

	<div role="main">
		@if(count($result) == 0)
			<div class="stripe-regular">
				<div class="row">
					<div class="column">
						<p class="text">
							No Results Match Your Search <b>‘{{$search_query}}’</b>. Please Try Again.
						</p>
					</div>
				</div>
			</div>
		@elseif(count($result) > 0)
			<div class="stripe-regular">
				<div class="row">
					<div class="large-12 columns">
						@foreach($result as $item)
							<div class="coupons-wrapper">
								<h2>{{$item->name}} <span>- {{count($item->price_comp)}} results</span></h2>

								<ul class="rr items-landscape">
									@foreach($item->price_comp as $deals)
										<li class="wrapper-3">
											<div class="row">
												<div class="large-3 small-12 columns">
													<figure>
														<img src="{{$item->img_link}}" alt="" style="height: 100px !important;">
													</figure>
												</div>
												<div class="large-6 small-8 columns">
													<div class="col-middle">
														<h2 class="alt"><a href="#">{{$deals->name}}</a>
														</h2>
														<p class="text secondary">
														<h2>Store: {{$deals->store}}</h2>
														</p>
													</div>
												</div>
												<div class="large-3 small-4 columns">
													<div class="col-right">
														<p class="value secondary" style="line-height: 3em">{{$deals->price}}</p>
														<a href="/coupon?q={!! str_replace(' ', '-', $deals->name) !!}&store={{$deals->store}}&link={{$deals->link}}&img_link={{$item->img_link}}"
														   class="input button red secondary responsive">Show Coupon</a>
													</div>
												</div>

											</div>
										</li>
									@endforeach
								</ul>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		@endif
	</div>
@endsection
