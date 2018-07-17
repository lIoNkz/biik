@extends('frontend.layouts.master')
@section('head')
    	<title>Жилой комплекс БИИК</title>
@endsection

@section('content')
       




<div id="content">

    <!--IMAGE BOXES******************************************************************************************-->

    <section class="block" id="features">
        <div class="container">
            <div class="block__wrapper">
                <div class="block__title text-center">
                    <h2>{{ $block18->title }}</h2>
                </div>
                <!--end block-title-->

                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <a href="index2.html#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature1" data-scroll-reveal="enter left and move 10px">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image img-into-bg">
                                        <img src="/img/{!! $block2->texts->find(54)->text !!}" alt="">
                                    </div>
                                </div>
                                <div class="box__content">
                                    <h4>{{ $block2->title }}</h4>
                                    <h5>Узнать больше</h5>
                                </div>
                            </div>
                            <!--end box__wrapper-->
                        </a>
                        <!--end box-image-->
                    </div>
                    <!--end col-xl-4-->

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <a href="index2.html#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature2" data-scroll-reveal="enter bottom and move 10px after">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image img-into-bg">
                                        <img src="/img/{!! $block3->texts->find(55)->text !!}" alt="">
                                    </div>
                                </div>
                                <div class="box__content">
                                    <h4>{{ $block3->title }}</h4>
                                    <h5>Узнать больше</h5>
                                </div>
                            </div>
                            <!--end box__wrapper-->
                        </a>
                        <!--end box-image-->
                    </div>
                    <!--end col-xl-4-->

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 offset-md-3 offset-lg-0">
                        <a href="index2.html#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature3" data-scroll-reveal="enter right and move 10px">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image img-into-bg">
                                        <img src="/img/{!! $block4->texts->find(56)->text !!}" alt="">
                                    </div>
                                </div>
                                <div class="box__content">
                                    <h4>{{ $block4->title }}</h4>
                                    <h5>Узнать больше</h5>
                                </div>
                            </div>
                            <!--end box__wrapper-->
                        </a>
                        <!--end box-image-->
                    </div>
                    <!--end col-xl-4-->

                </div>
                <!--end row-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
        <div class="background-wrapper" data-background-color="#f9f9f9">
            <div class="background--image opacity-10 background--repeat-repeat">
                <img src="/img/pattern-topo.png" alt="">
            </div>
        </div>
        <!--end background-->
    </section>
    <!--end #image-blocks.block-->

    <!--TEXT with IMAGE BLOCK********************************************************************************-->

    <section class="block" id="text-image-block">
        <div class="container">
            <div class="block__wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-align-right push-down">
                            <h2 data-scroll-reveal="enter left and move 10px">{{ $block5->title }}</h2>
                            <p data-scroll-reveal="enter left and move 10px after 0.1s">
                                {!! $block5->texts->find(19)->text !!}
                            </p>
                            <a href="index2.html#contact" class="btn btn-primary btn-framed">{!! $block5->texts->find(20)->text !!}</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img class="width-100 shadow rounded-corners" src="/img/{!! $block5->texts->find(57)->text !!}" alt="">
                    </div>
                </div>
                <!--end row-->
                <div class="background-wrapper">
                    <div class="background background--image opacity-70 background--repeat-repeat height-50">
                        <img src="/img/pattern-dot.png" alt="">
                    </div>
                </div>
                <!--end background-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
    </section>
    <!--end #text-image-block.block-->

    <!--BLOCKQUOTE*******************************************************************************************-->

    <section class="block" id="blockquote">
        <div class="container">
            <div class="block__wrapper">
                <blockquote class="blockquote text-center">
                    <i class="fa fa-quote-left"></i>
                    <p>{!! $block6->texts->find(21)->text !!}</p>
                    <footer class="blockquote-footer">{!! $block6->texts->find(22)->text !!}</footer>
                </blockquote>
                <!--end blockquote-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
        <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3" data-background-color="#f1f1f1">
            <div class="background--image opacity-10 parallax-element">
                <img src="/img/{!! $block6->texts->find(58)->text !!}" alt="">
            </div>
        </div>
        <!--end background-->
    </section>
    <!--end #blockquote.block-->

    <!--TEXT with BACKGROUND BLOCK***************************************************************************-->

    <section class="block" id="developing-process">
        <div class="container">
            <div class="block__title text-center">
                <h2>{{ $block17->title }}</h2>
            </div>
            <!--end block-title-->
            <div class="block__wrapper">

                <div class="row">
                    <div class="col-md-5">
                        <img src="/img/{!! $block17->texts->find(59)->text !!}" class="width-100 shadow rounded-corners" alt="">
                    </div>
                    <div class="col-md-6">
                        <ul class="list list--text list--dashed">
                            <li data-scroll-reveal="enter bottom and move 10px">
                                <h5 class="opacity-50"><strong>{{ $block7->title }}</strong></h5>
                                <h4>{!! $block7->texts->find(23)->text !!}
                                    {!! $block7->texts->find(30)->text !!}
                                </h4>
                                <p>
                                    {!! $block7->texts->find(24)->text !!}
                                </p>
                            </li>
                            <li data-scroll-reveal="enter bottom and move 10px after 0.1s">
                                <h5 class="opacity-50"><strong>{{ $block8->title }}</strong></h5>
                                <h4>{!! $block8->texts->find(27)->text !!}
                                    {!! $block8->texts->find(29)->text !!}
                                </h4>
                                <p>
                                    {!! $block8->texts->find(25)->text !!}
                                </p>
                            </li>
                            <li data-scroll-reveal="enter bottom and move 10px after 0.2s">
                                <h5 class="opacity-50"><strong>{{ $block9->title }}</strong></h5>
                                <h4>{!! $block9->texts->find(28)->text !!}
                                    {!! $block9->texts->find(31)->text !!}
                                </h4>
                                <p>
                                    {!! $block9->texts->find(26)->text !!}
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="background-wrapper">
                    <div class="background--particles">
                    </div>
                </div>
                <!--end background-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
    </section>
    <!--end #text-image-block.block-->

    <!--PRICING BOXES****************************************************************************************-->

    <section class="block" id="pricing">
        <div class="container">
            <div class="block__wrapper">
                <div class="block__title">
                    <h2>Цены</h2>
                </div>
                <!--end block-title-->

                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="box box--pricing" data-scroll-reveal="enter bottom and move 10px">
                            <div class="box__wrapper">
                                <div class="box__image height-300px">
                                    <div class="img-into-bg">
                                        <img src="/img/{{ $block10->texts->find(60)->text }}" alt="">
                                    </div>
                                </div>
                                <div class="box__header">
                                    <h4>{{ $block10->title }}</h4>
                                    <h3 class="price">{{ $block10->texts->find(32)->text }}</h3>
                                </div>
                                <div class="box__content">
                                    <ul class="list-unstyled">
                                        {!! $block10->texts->find(33)->text !!}
                                    </ul>
                                </div>
                                <div class="box__footer">
                                    <a href="index2.html#contact" class="btn btn-primary">{!! $block10->texts->find(39)->text !!}</a>
                                </div>
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-pricing-->
                    </div>
                    <!--end col-md-4-->

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="box box--pricing promoted" data-scroll-reveal="enter bottom and move 10px after 0.1s">
                            <div class="box__wrapper">
                                <div class="box__image height-300px">
                                    <div class="img-into-bg">
                                        <img src="/img/{{ $block11->texts->find(61)->text }}" alt="">
                                    </div>
                                </div>
                                <div class="box__header">
                                    <h4>{!! $block11->title !!}</h4>
                                    <h3 class="price">{!! $block11->texts->find(37)->text !!}</h3>
                                </div>
                                <div class="box__content">
                                    <ul class="list-unstyled">
                                        {!! $block11->texts->find(34)->text !!}
                                    </ul>
                                </div>
                                <div class="box__footer">
                                    <a href="index2.html#contact" class="btn btn-light">{!! $block11->texts->find(38)->text !!}</a>
                                </div>
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-pricing-->
                    </div>
                    <!--end col-md-4-->

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 offset-md-3 offset-lg-0">
                        <div class="box box--pricing" data-scroll-reveal="enter bottom and move 10px after 0.2s">
                            <div class="box__wrapper">
                                <div class="box__image height-300px">
                                    <div class="img-into-bg">
                                        <img src="/img/{{ $block12->texts->find(62)->text }}" alt="">
                                    </div>
                                </div>
                                <div class="box__header">
                                    <h4>{!! $block12->title !!}</h4>
                                    <h3 class="price">{!! $block12->texts->find(36)->text !!}</h3>
                                </div>
                                <div class="box__content">
                                    <ul class="list-unstyled">
                                        {!! $block12->texts->find(35)->text !!}
                                    </ul>
                                </div>
                                <div class="box__footer">
                                    <a href="index2.html#contact" class="btn btn-primary">{!! $block12->texts->find(40)->text !!}</a>
                                </div>
                            </div>
                            <!--end box__wrapper-->
                        </div>
                        <!--end box-pricing-->
                    </div>
                    <!--end col-md-4-->

                </div>
                <!--end row-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
    </section>
    <!--end #pricing.block-->


    <section class="block" id="gallery">
        <div class="container">
            <div class="block__wrapper">
                <div class="block__title">
                    <h2>Галерея</h2>
                </div>
                <!--end block-title-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
        <div class="owl-carousel carousel-gallery" data-owl-items="5" data-owl-dots="1" data-owl-nav="0">
        @foreach($slider5 as $slide)
            <a href="/img/{{ $slide->path }}" class="carousel-gallery__image popup-image">
                <div class="img-into-bg">
                    <img src="/img/{{ $slide->path }}">
                </div>
            </a>
        @endforeach
        </div>
        <div class="background-wrapper">
            <div class="background background--image background--repeat-repeat opacity-50">
                <img src="/img/pattern-dot.png" alt="">
            </div>
        </div>
        <!--end background-->
    </section>
    <!--end #section.block-->

    <section class="block" id="location">
        <div class="container">
            <div class="block__wrapper">
                <div class="block__title">
                    <h2>{{ $block13->title }}</h2>
                    <h3>{{ $block13->texts->find(41)->text }}</h3>
                </div>
                <!--end block-title-->
                <div class="map-wrapper">
                    <div class="pack d-inline-block" data-scroll-reveal="enter bottom and move 10px">
                        <h4>{{ $block13->texts->find(42)->text }}</h4>
                        <address>
                            {{ $block13->texts->find(43)->text }}
                            <br>
                            {{ $block13->texts->find(44)->text }}
                        </address>
                        <dl>
                            <dt>Широта</dt>
                            <dd>{{ $block13->texts->find(45)->text }}</dd>
                            <dt>Долгота</dt>
                            <dd>{{ $block13->texts->find(46)->text }}</dd>
                        </dl>
                        <div class="image">
                            <div class="img-into-bg">
                                <img src="/img/gallery-01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="map" class="height-500px"></div>
                </div>
                <!--end map-wrapper-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
    </section>
    <!--end #section.block-->

    <section class="block" id="partners">
        <div class="container">
            <div class="block__wrapper">
                <div class="block_title text-center">
                    <h2>{{ $block20->title }}</h2>
                </div>
                <!--end block__title-->
                <div class="d-flex align-items-center justify-content-around">
                    <a href="index2.html#">
                        <img src="/img/{{ $block20->texts->find(63)->text }}" alt="">
                    </a>
                    <a href="index2.html#">
                        <img src="/img/{{ $block20->texts->find(64)->text }}" alt="">
                    </a>
                    <a href="index2.html#">
                        <img src="/img/{{ $block20->texts->find(65)->text }}" alt="">
                    </a>
                    <a href="index2.html#">
                        <img src="/img/{{ $block20->texts->find(66)->text }}" alt="">
                    </a>
                    <a href="index2.html#">
                        <img src="/img/{{ $block20->texts->find(67)->text }}" alt="">
                    </a>
                </div>
                <!--end logos-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
    </section>
    <!--end #partners.block-->

    <section class="block" id="contact">
        <div class="container">
            <div class="block__wrapper">
                <div class="block__title">
                    <h2>{{ $block15->title }}</h2>
                </div>
                <!--end block-title-->
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <h4>{{ $block15->texts->find(47)->text }}</h4>
                        <div class="person">
                            <div class="person__image">
                                <div class="img-into-bg">
                                    <img src="/img/{{ $block15->texts->find(68)->text }}" alt="">
                                </div>
                            </div>
                            <div class="person__description">
                                <h5>{{ $block15->texts->find(48)->text }}</h5>
                                <figure>
                                    <label>Телефон:</label>
                                    <div>{{ $block15->texts->find(49)->text }}</div>
                                </figure>
                                <figure>
                                    <label>E-mail:</label>
                                    <div>
                                        <a href="index2.html#">{{ $block15->texts->find(50)->text }}</a>
                                    </div>
                                </figure>
                                <figure>
                                    <label>Skype:</label>
                                    <div>{{ $block15->texts->find(51)->text }}</div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                        <h4>Форма обратной связи</h4>

                        <form id="form-contact" method="post" class="form clearfix">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-name">Ваше имя</label>
                                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Ваше имя" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-email">Ваш email</label>
                                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Ваш Email" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                            </div>
                            <!--end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form-contact-message">Ваше сообщение</label>
                                        <textarea class="form-control" id="form-contact-message" rows="8" name="message" placeholder="Ваше сообщение" required></textarea>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-12 -->
                            </div>
                            <!--end row -->
                            <div class="form-group clearfix">
                                <button type="submit" class="btn pull-right btn-primary btn-framed" id="form-contact-submit">Отправить сообщение</button>
                            </div>
                            <!--end form-group -->
                            <div class="form-contact-status"></div>
                        </form>
                        <!--end form-contact -->
                    </div>
                    <!--end col-xl-7-->
                </div>
                <!--end row-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
        <div class="background-wrapper">
            <div class="background background--image background--repeat-repeat opacity-50">
                <img src="/img/pattern-dot.png" alt="">
            </div>
        </div>
        <!--end background-->
    </section>
    <!--end #section.block-->

</div>
<!--End of main block content-->



<!-- Modal -->
<div class="modal fade" id="modal-feature1" tabindex="-1" role="dialog" aria-labelledby="modal-feature-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal__title">
                    <h2>{{ $block2->title }}</h2>
                </div>
                <div class="owl-carousel modal__carousel" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="0" data-owl-loop="1">
                    @foreach($slider2 as $slide)
                    <div class="slide img-into-bg">
                        <img src="/img/{{ $slide->path }}">
                    </div>
                    @endforeach
                </div>
                <!--end modal__slider-->
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="float-left p-5 width-60">
                    <h4>{{ $block2->texts->find(13)->text }}</h4>
                    <p>
                        {{ $block2->texts->find(14)->text }}
                    </p>
                </div>
                <!--end float-left-->
                <div class="float-right p-5 width-40 height-100 position-relative">
                    <h4>Узнать больше</h4>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Просмотреть брошюру</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Последние перспективы</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Скачать план</span>
                        </a>
                    </figure>
                    <div class="background-wrapper">
                        <div class="background background--image opacity-70 background--repeat-repeat">
                            <img src="/img/pattern-dot.png" alt="">
                        </div>
                    </div>
                    <!--end background-->
                </div>
                <!--end float-right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<!-- Modal -->
<div class="modal fade" id="modal-feature2" tabindex="-1" role="dialog" aria-labelledby="modal-feature-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal__title">
                    <h2>{{ $block3->title }}</h2>
                </div>
                <div class="owl-carousel modal__carousel" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="0" data-owl-loop="1">
                    
                    @foreach($slider3 as $slide)
                    <div class="slide img-into-bg">
                        <img src="/img/{{ $slide->path }}">
                    </div>
                    @endforeach
                </div>
                <!--end modal__slider-->
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="float-left p-5 width-60">
                    <h4>{{ $block3->texts->find(15)->text }}</h4>
                    <p>
                        {{ $block3->texts->find(17)->text }}
                    </p>
                </div>
                <!--end float-left-->
                <div class="float-right p-5 width-40 height-100 position-relative">
                    <h4>Узнать больше</h4>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Просмотреть брошюру</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Последние перспективы</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Скачать план</span>
                        </a>
                    </figure>
                    <div class="background-wrapper">
                        <div class="background background--image opacity-70 background--repeat-repeat">
                            <img src="/img/pattern-dot.png" alt="">
                        </div>
                    </div>
                    <!--end background-->
                </div>
                <!--end float-right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<!-- Modal -->
<div class="modal fade" id="modal-feature3" tabindex="-1" role="dialog" aria-labelledby="modal-feature-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal__title">
                    <h2>{{ $block4->title }}</h2>
                </div>
                <div class="owl-carousel modal__carousel" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="0" data-owl-loop="1">
                    @foreach($slider4 as $slide)
                    <div class="slide img-into-bg">
                        <img src="/img/{{ $slide->path }}">
                    </div>
                    @endforeach
                </div>
                <!--end modal__slider-->
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="float-left p-5 width-60">
                    <h4>{{ $block4->texts->find(18)->text }}</h4>
                    <p>
                        {{ $block4->texts->find(16)->text }}
                    </p>
                </div>
                <!--end float-left-->
                <div class="float-right p-5 width-40 height-100 position-relative">
                    <h4>Узнать больше</h4>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Просмотреть брошюру</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Последние перспективы</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="index2.html#">
                            <i class="fa fa-file"></i>
                            <span>Скачать план</span>
                        </a>
                    </figure>
                    <div class="background-wrapper">
                        <div class="background background--image opacity-70 background--repeat-repeat">
                            <img src="/img/pattern-dot.png" alt="">
                        </div>
                    </div>
                    <!--end background-->
                </div>
                <!--end float-right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

@endsection
@section('scripts')

<script>
    var latitude = 42.335563;
    var longitude = 69.591654;
    var markerImage = "/img/map-marker.png";
    var mapTheme = "light";
    var mapElement = "map";
    google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme, mapElement));
</script>

@endsection