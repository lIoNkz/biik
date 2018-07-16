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
                    <h2>Что Вы приобретете</h2>
                </div>
                <!--end block-title-->

                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <a href="index2.html#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter left and move 10px">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image img-into-bg">
                                        <img src="/img/image-01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box__content">
                                    <h4>Красивые интерьеры</h4>
                                    <h5>Узнать больше</h5>
                                </div>
                            </div>
                            <!--end box__wrapper-->
                        </a>
                        <!--end box-image-->
                    </div>
                    <!--end col-xl-4-->

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <a href="index2.html#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter bottom and move 10px after">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image img-into-bg">
                                        <img src="/img/image-02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box__content">
                                    <h4>Парковка и покупки</h4>
                                    <h5>Узнать больше</h5>
                                </div>
                            </div>
                            <!--end box__wrapper-->
                        </a>
                        <!--end box-image-->
                    </div>
                    <!--end col-xl-4-->

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 offset-md-3 offset-lg-0">
                        <a href="index2.html#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter right and move 10px">
                            <div class="box__wrapper">
                                <div class="box__header">
                                    <div class="box__image img-into-bg">
                                        <img src="/img/image-03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box__content">
                                    <h4>Спортивно - оздоровительные места</h4>
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
                            <h2 data-scroll-reveal="enter left and move 10px">Новая жизнь для твоей мечты</h2>
                            <p data-scroll-reveal="enter left and move 10px after 0.1s">
                                Fusce pretium dui quis est pretium lobortis. Vestibulum eu ex sed nibh
                                condimentum tristique eu finibus lorem. Nullam sed eleifend massa. Morbi nulla turpis, pharetra et
                            </p>
                            <a href="index2.html#contact" class="btn btn-primary btn-framed">Свяжитесь с нами</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img class="width-100 shadow rounded-corners" src="/img/image-04.jpg" alt="">
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
                    <p>Cras nisl lacus, tincidunt vitae neque vitae, interdum iaculis tortor. Orci varius natoque penatibus et magnis dis parturient montes</p>
                    <footer class="blockquote-footer">Джон Доу</footer>
                </blockquote>
                <!--end blockquote-->
            </div>
            <!--end block__wrapper-->
        </div>
        <!--end container-->
        <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3" data-background-color="#f1f1f1">
            <div class="background--image opacity-10 parallax-element">
                <img src="/img/slide-02.jpg" alt="">
            </div>
        </div>
        <!--end background-->
    </section>
    <!--end #blockquote.block-->

    <!--TEXT with BACKGROUND BLOCK***************************************************************************-->

    <section class="block" id="developing-process">
        <div class="container">
            <div class="block__title text-center">
                <h2>Процесс строительства</h2>
            </div>
            <!--end block-title-->
            <div class="block__wrapper">

                <div class="row">
                    <div class="col-md-5">
                        <img src="/img/image-05.jpg" class="width-100 shadow rounded-corners" alt="">
                    </div>
                    <div class="col-md-6">
                        <ul class="list list--text list--dashed">
                            <li data-scroll-reveal="enter bottom and move 10px">
                                <h5 class="opacity-50"><strong>Фаза #1</strong></h5>
                                <h4>Здание A
                                    <span class="badge badge-success">Завершено</span>
                                </h4>
                                <p>
                                    Fusce pretium dui quis est pretium lobortis. Vestibulum eu ex sed nibh
                                    condimentum tristique eu finibus lorem. Nullam sed eleifend massa.
                                </p>
                            </li>
                            <li data-scroll-reveal="enter bottom and move 10px after 0.1s">
                                <h5 class="opacity-50"><strong>Фаза #2</strong></h5>
                                <h4>Здание B
                                    <span class="badge badge-success">Завершено</span>
                                </h4>
                                <p>
                                    Vestibulum eu ex sed nibh condimentum tristique eu finibus lorem. Nullam sed
                                    eleifend massa. Morbi nulla turpis, pharetra
                                </p>
                            </li>
                            <li data-scroll-reveal="enter bottom and move 10px after 0.2s">
                                <h5 class="opacity-50"><strong>Фаза #3</strong></h5>
                                <h4>Здание C
                                    <span class="badge badge-secondary">В ходе выполнения</span>
                                </h4>
                                <p>
                                    Tristique eu finibus lorem. Nullam sed eleifend massa. Morbi nulla turpis,
                                    pharetra et nisl eu, pellentesque molestie erat
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
                                        <img src="/img/gallery-03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box__header">
                                    <h4>Квартира A</h4>
                                    <h3 class="price">$125,000</h3>
                                </div>
                                <div class="box__content">
                                    <ul class="list-unstyled">
                                        <li>245m<sup>2</sup></li>
                                        <li>1 Ванная</li>
                                        <li>10 m<sup>2</sup> Балкон</li>
                                    </ul>
                                </div>
                                <div class="box__footer">
                                    <a href="index2.html#contact" class="btn btn-primary">Контактный агент</a>
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
                                        <img src="/img/gallery-02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box__header">
                                    <h4>Квартира B</h4>
                                    <h3 class="price">$240.000</h3>
                                </div>
                                <div class="box__content">
                                    <ul class="list-unstyled">
                                        <li>340m<sup>2</sup></li>
                                        <li>2 Ванные</li>
                                        <li>2 Спальни</li>
                                        <li>15 m<sup>2</sup> Балкон</li>
                                    </ul>
                                </div>
                                <div class="box__footer">
                                    <a href="index2.html#contact" class="btn btn-light">Контактный агент</a>
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
                                        <img src="/img/gallery-05.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box__header">
                                    <h4>Квартира C</h4>
                                    <h3 class="price">$356.000</h3>
                                </div>
                                <div class="box__content">
                                    <ul class="list-unstyled">
                                        <li>480m<sup>2</sup></li>
                                        <li>2 Ванные</li>
                                        <li>2 Спальни</li>
                                        <li>30 m<sup>2</sup> Терасса</li>
                                    </ul>
                                </div>
                                <div class="box__footer">
                                    <a href="index2.html#contact" class="btn btn-primary">Контактный агент</a>
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

            <a href="/img/gallery-01.jpg" class="carousel-gallery__image popup-image">
                <div class="img-into-bg">
                    <img src="/img/gallery-01.jpg" alt="">
                </div>
            </a>
            <a href="/img/gallery-02.jpg" class="carousel-gallery__image popup-image">
                <div class="img-into-bg">
                    <img src="/img/gallery-02.jpg" alt="">
                </div>
            </a>
            <a href="/img/gallery-03.jpg" class="carousel-gallery__image popup-image">
                <div class="img-into-bg">
                    <img src="/img/gallery-03.jpg" alt="">
                </div>
            </a>
            <a href="/img/gallery-04.jpg" class="carousel-gallery__image popup-image">
                <div class="img-into-bg">
                    <img src="/img/gallery-04.jpg" alt="">
                </div>
            </a>
            <a href="/img/gallery-05.jpg" class="carousel-gallery__image popup-image">
                <div class="img-into-bg">
                    <img src="/img/gallery-05.jpg" alt="">
                </div>
            </a>
            <a href="/img/image-04.jpg" class="carousel-gallery__image popup-image">
                <div class="img-into-bg">
                    <img src="/img/image-04.jpg" alt="">
                </div>
            </a>
            <a href="/img/image-03.jpg" class="carousel-gallery__image popup-image">
                <div class="img-into-bg">
                    <img src="/img/image-03.jpg" alt="">
                </div>
            </a>

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
                    <h2>Расположение</h2>
                    <h3>Где Вы будете жить</h3>
                </div>
                <!--end block-title-->
                <div class="map-wrapper">
                    <div class="pack d-inline-block" data-scroll-reveal="enter bottom and move 10px">
                        <h4>Название Вашего ЖК</h4>
                        <address>
                            2519 Название улицы
                            <br>
                            Казахстан, Шымкент 160000
                        </address>
                        <dl>
                            <dt>Широта</dt>
                            <dd>51.5144281</dd>
                            <dt>Долгота</dt>
                            <dd>-0.12815562</dd>
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
                    <h2>Партнеры</h2>
                </div>
                <!--end block__title-->
                <div class="d-flex align-items-center justify-content-around">
                    <a href="index2.html#">
                        <img src="/img/partner-1.png" alt="">
                    </a>
                    <a href="index2.html#">
                        <img src="/img/partner-2.png" alt="">
                    </a>
                    <a href="index2.html#">
                        <img src="/img/partner-3.png" alt="">
                    </a>
                    <a href="index2.html#">
                        <img src="/img/partner-4.png" alt="">
                    </a>
                    <a href="index2.html#">
                        <img src="/img/partner-5.png" alt="">
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
                    <h2>Контакты</h2>
                </div>
                <!--end block-title-->
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <h4>Наш агент</h4>
                        <div class="person">
                            <div class="person__image">
                                <div class="img-into-bg">
                                    <img src="/img/author-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="person__description">
                                <h5>Жазира</h5>
                                <figure>
                                    <label>Телефон:</label>
                                    <div>+7 (777) 777 7777</div>
                                </figure>
                                <figure>
                                    <label>E-mail:</label>
                                    <div>
                                        <a href="index2.html#">example@example.com</a>
                                    </div>
                                </figure>
                                <figure>
                                    <label>Skype:</label>
                                    <div>Jazira</div>
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
<div class="modal fade" id="modal-feature" tabindex="-1" role="dialog" aria-labelledby="modal-feature-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal__title">
                    <h2>Красивые интерьеры</h2>
                </div>
                <div class="owl-carousel modal__carousel" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="0" data-owl-loop="1">
                    <div class="slide img-into-bg">
                        <img src="/img/slide-01.jpg" alt="">
                    </div>
                    <div class="slide img-into-bg">
                        <img src="/img/slide-02.jpg" alt="">
                    </div>
                    <div class="slide img-into-bg">
                        <img src="/img/slide-03.jpg" alt="">
                    </div>
                </div>
                <!--end modal__slider-->
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="float-left p-5 width-60">
                    <h4>Современный и чистый</h4>
                    <p>
                        Fusce pretium dui quis est pretium lobortis. Vestibulum eu ex sed nibh condimentum
                        tristique eu finibus lorem. Nullam sed eleifend massa. Morbi nulla turpis,
                        pharetra et nisl eu, pellentesque molestie erat
                        Vestibulum a nunc molestie, imperdiet enim a, pharetra magna.
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