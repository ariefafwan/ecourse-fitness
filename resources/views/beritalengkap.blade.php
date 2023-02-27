<style>
   #button {
       color: #090909;
       padding: 0.7em 1.7em;
       font-size: 18px;
       border-radius: 0.3em;
       background: #ffffff;
       border: 1px solid #e8e8e8;
       transition: all 0.3s;
       box-shadow: 5px 5px 10px #c5c5c5, -5px -5px 10px #ffffff;
   }

   #button:hover {
       box-shadow: -5px -5px 10px #c5c5c5, 5px 5px 10px #ffffff;
   }
</style>

@extends('layouts.main')

@section('container')

   @if ($berita->count())
       <div class="container" data-aos="fade-up">
         <div class="row">
            <!-- berita -->
            @php
              $i = 1;
            @endphp
            @foreach ($berita as $row)
                      <div class="col-md-4">
                          <article itemprop="blogPost" itemscope="" itemtype="#" class="ct-article ct-iconBox--withImageGreyScale">
                              <div class="ct-article-media ct-icon">
                                  <a itemprop="url" href="{{ route('show',$row->id) }}">
                                    {{-- <a itemprop="url" href="{{ route('show1')}}"> --}}
                                      <img itemprop="image" src="{{ asset('img/news/'.$row->image) }}" alt="blog-post" style="width: 100%; height: 230px">
                                  </a>
                              </div>
                              <div class="ct-article-title">
                                  <a itemprop="url" href="{{ route('show', $row->id) }}">
                                      <h4 class="text-dark">{{ $row->title }}</h4>
                                  </a>
                              </div>
                              <ul class="list-unstyled list-inline ct-article-meta">
                                <li class="text-muted text-dark">{{ $row->created_at->format('l, H:i:s d M Y') }}</li>
                              </ul>
                              <div itemprop="text" class="ct-article-description">
                                  <h6 class="ct-u-marginBottom50 text-dark">{{ Str::limit(strip_tags($row->details1),50) }}</h6>
                              </div>
                          </article>
                      </div>
            @if ($i % 6 == 0)
              <div class="clearfix visible-md visible-lg"></div>
            @endif
            @php
              $i++;
            @endphp
            @endforeach
            <!-- berita -->
          </div>
       </div>
   @else
       <div class="container">
           <section id="hero" class="hero d-flex align-items-center section-bg mt-5">
               <div class="container">
                   <div class="row justify-content-between gy-5">
                       <div
                           class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                           <h2 data-aos="fade-up">404</h2>
                           <p data-aos="fade-up" data-aos-delay="100">Content Belum Tersedia!!</p>
                       </div>
                       <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                           <img src="/img/notfont/notfont.gif" class="img-fluid" alt="" data-aos="zoom-out"
                               data-aos-delay="300">
                       </div>
                   </div>
               </div>
           </section>
       </div>
   @endif

@endsection
