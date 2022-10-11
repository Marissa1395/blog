@extends('layouts.app')
@section('content')

<div class="blog-wrapper">
    <div class="container">
        <div class="wrapper-slider">
            <div class="carousel">
              <div><img src="/img/carousel-img/c1.jpg"></div>
              <div><img src="/img/carousel-img/c9.jpg"></div>
              <div><img src="/img/carousel-img/c10.jpg"></div>
              <div><img src="/img/carousel-img/c8.jpg"></div>
              <div><img src="/img/carousel-img/c5.jpg"></div>
              <div><img src="/img/carousel-img/c6.jpg"></div>
            </div>
      </div> 
        <section id="profile">
            <div class="blog-container">
                <div class="row align-items-start">
                  <div class="line"></div>
                  <h1>Hi I'm, Marissa Dumayac</h1>
                  <p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor</p>
                  <button>READ MORE</button>
                </div>
              </div>
              <div class="blog-container">
                <img src="/img/4.jpg">
            </div>
            <div class="blog-container">
                <img src="/img/maris1.jpg">
            </div>
        </section>
        <section id="projects">
            <div class="projects">
                <div class="prjct-items">
                    <div class="prjct-contents">
                        <img src="/img/maris.jpg">
                    </div>
                </div>
                <div class="prjct-items">
                    <div class="prjct-contents">
                        <h1>About Works</h1>
                    <p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor</p>
                    <button>SEE MORE</button>
                    </div>
                </div>
            </div>
            <div class="projects">
                <div class="prjct-items">
                    <div class="prjct-contents">
                        <img src="/img/1.jpg">
                    </div>
                </div>
                <div class="prjct-items">
                    <div class="prjct-contents">
                        <h1>About Lifestyle</h1>
                    <p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor</p>
                    <button>SEE MORE</button>
                    </div>
                </div>
            </div>
        </section>    
    </div>
    </div>
</div>
@endsection