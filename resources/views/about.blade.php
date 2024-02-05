@extends('tpl.main')

@section('main')

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
                            <section class="title-section">
                                <h1 class="title-header">
                                    {{$page->title}}
                                </h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li>
                                        <a href="/" title="Главная" itemprop="url">Главная</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <span>{{$page->title}}</span>
                                    </li>
                                </ul>
                                <!-- END BREADCRUMBS -->
                            </section><!-- .title-section -->
                        </div>
                    </div>
                    <div id="content" class="row">
                        <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                            <div id="post-1797" class="post-1797 page type-page status-publish hentry page">
                                <div class="title-box clearfix about-title">
                                    <h2 class="title-box_primary">
	                                <span>
		                                <h1>«Студия камня» – компания, которая уже более 16 лет изготавливает и реализует слэбы натурального камня – оникса, мрамора, гранита, агата</h1>
	                                </span>
                                    </h2>
                                </div><!-- //.title-box -->
                                <div class="row">
                                    <div class="span12">
                                        <p>Открыв «Студию камня» в 2002 году, мы взяли курс на постоянное развитие и лидирующие позиции. Добившись цели, наша команда не перестала развиваться, и стремится предложить своим клиентам лучшие слэбы из камня. </p> <p>Мы внимательно следим за трендами дизайна интерьера и экстерьера и постоянно обновляем товарный ряд - слэбы из натурального камня и полудрагоценных камней. </p>
                                    </div>
                                </div><!-- .row (end) -->
                                <div class="title-box clearfix about-title1">
                                    <h2 class="title-box_primary"><span><h2>Коротко о нас в фактах:</h2></span></h2>
                                </div><!-- //.title-box -->
                                <div class="row" >
                                    <div class="span10">
		                            <span class="text-highlight">
			                            <u1> <li>16+ лет производства и продажи;</li> <li> Работа с различными типами камня – 4+;</li> <li> 25 членов команды с опытом работы в камнеобработке и дизайне интерьеров;</li> <li> 500 кв. м производственных площадей.</li> </u1>
		                            </span>
                                    </div>

                                    <div class="span2">
                                        <img src="{{asset('assets/images/about1.png')}}" alt="about"/>
                                    </div>
                                </div><!-- .row (end) -->

                                <div class="row">
                                    <div class="title-box clearfix about-title1">
                                        <h2 class="title-box_primary"><span><h3>Преимущества сотрудничества, продажа слэбов со склада в Москве и под заказ</h3></span></h2>
                                    </div><!-- //.title-box -->
                                    <div class="span12">
                                        <p>Мы закупаем исключительно отборное сырье. Среди наших партнеров проверенные поставщики лучшего природного камня из Индии, Испании, Италии, Бразилии. Отличные материалы, передовое производство, высококлассные инженеры и каменщики – то, что позволяет нам гарантировать стабильно высокое качество слэбов и более 25 лет их эксплуатационного ресурса.</p> <p>Чтобы связаться с нашим представителем, обратитесь по телефону +7 (495) 669 55 49. Расскажите нам о своих пожеланиях – какой нужен материал, его цвет, размер и иные характеристики, и менеджер предложит оптимальное решение. </p>
                                    </div>
                                </div>

                                <div class="wrap" style="color: #000;">
                                    <div class="title-box clearfix testi-title">
                                        <h2 class="title-box_primary"><span style="color: #000;">
                                                <h3>Звоните! Покупка слэбов натурального камня надежно и выгодно! Работаем как оптом, так и в розницу.</h3>
                                            </span></h2>
                                    </div><!-- //.title-box -->
                                    <div class="testimonials testi-list">
                                        <div class="testi-item">
                                            <blockquote class="testi-item_blockquote">
                                                <a style="color: #000;">
                                                    Наши специалисты детально проконсультируют и добросовестно выполнят свою работу. Мы произведем грамотные расчеты, согласуем все моменты, и пригласим вас для подписания договора.
                                                </a>
                                                <div class="clear"></div>
                                            </blockquote>
                                            <small class="testi-meta" style="color: #000;"><span class="user"></span>

                                            </small>
                                        </div>
                                    </div>
                                </div> <!-- wrap (end) -->


                                <div class="minus"></div>
                                <div class="clear"></div>
                                <!--.pagination-->
                            </div><!--#post-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
