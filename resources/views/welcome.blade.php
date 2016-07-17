@extends('layouts.master')

@section('content')
    @foreach($result as $res)
    <div class="stripe-regular items-carousel-wrap">
              <div class="row">
                <div class="column">
                  <h2>{{$res->title}}</h2>
                </div>
              </div>
              <div class="row collapse">
                <div class="column">
                  <div class="items-carousel flexslider">
                    <ul class="rr slides">
                        @foreach($res->deals as $deals)
                       <li>
                        <div class="wrapper-3 item-thumb">
                          <div class="top">
                            <figure style="text-align:center;">
                              <img style="max-height:120px;margin-left: auto; margin-right: auto;" src={{$deals->img_url}} alt="">
                            </figure>
                            <h2 class="alt"><a href="#">{{str_limit($deals->prod_name,25,'...')}}</a></h2>
                          </div>
                          <div class="bottom">
                            <p class="value secondary">{{$deals->curr_p}}</p>
                            <h6 style="text-decoration:line-through">{{$deals->mrp}}</h6>
                            
                            <a href="{{'https://compare.buyhatke.com'.$deals->link}}" class="input button red secondary">Buy Now</a>
                          </div>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
    @endforeach
@endsection