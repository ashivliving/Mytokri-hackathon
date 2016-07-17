@extends('layouts.master')

@section('content')
	
	<div role="main">
            
            <div class="stripe-regular">
              <div class="row">
                
                <div class="large-12 columns">
                  
                  <article class="blog-post-content">
                    
                    <section class="comments">
                      <div class="row">
                        <div class="large-8 columns">
                          <h2>Related Coupons</h2>
                        </div>
                      </div>
                      
                      @foreach($result as $res)
                      <div class="wrapper-3 primary oh" style="margin-bottom:20px;">
                        <article class="level-0">
                          <div class="row">
                            <div class="large-2 small-2 columns">
                              <a href="{{$res->deal_link}}" style="height:80px;padding-top:30px;border-radius:20px;" class="input button red secondary responsive">Activate Deal	</a>
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
                        </section>
                        </article>
                        </div>
                        </div>
                        </div>
                        </div>

@endsection