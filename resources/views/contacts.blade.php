@extends('tpl.main')

@section('main')

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="page-fullwidth.php"
                     data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="static"
                             data-motopress-static-file="static/static-title.php">
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
                            <div id="post-14" class="post-14 page type-page status-publish hentry page">
                                <div class="row">
                                    <div class="span12">
                                        <div class="google-map">
                                            <iframe
                                                src=" {!! @$page->composite['map'] !!}"
                                                width="100%" height="300" frameborder="0" style="border:0"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <h2><br/></h2>
                                        <address>
                                            <p><span style="font-size: 12pt;"><strong><span style="color: #000000;">Адрес склада: </span></strong><span
                                                        style="color: #993366;"> {!! @$page->composite['store'] !!}</span></span>
                                            </p>
                                            <p><span style="font-size: 12pt;"></span></p>
                                            <p><span style="font-size: 12pt;"><strong><span style="color: #000000;">Адрес производства и офиса: </span></strong><span
                                                        style="color: #993366;">{!! @$page->composite['manufacture'] !!}</span></span>
                                            </p>
                                            <p><span style="font-size: 12pt;"><strong><span style="color: #000000;">Телефон: </span></strong><span
                                                        style="color: #993366;">{!! @$page->composite['phone'] !!}</span></span>
                                            </p>
                                            <p><span style="font-size: 12pt;"><strong><span style="color: #000000;">E-mail: </span></strong><span
                                                        style="color: #993366;">{!! @$page->composite['email'] !!}</span></span></p>
                                            <p><span style="font-size: 12pt;"></span></p>
                                        </address><!-- address (end) --></div>
                                    <div class="span8">
{{--                                        <h2>Связаться с нами</h2>
                                        <div class="wpcf7" id="wpcf7-f208-p14-o1">
                                            <form action="javascript:;" name="callback" class="wpcf7-form"
                                                  novalidate="novalidate">
                                                <div style="display: none;">
                                                    <input type="hidden" name="ID" value="0"/>
                                                    <input type="hidden" name="PRODUCT_NAME"
                                                           value="Из формы на странице Контакты"/>
                                                </div>
                                                <div id="response">

                                                </div>
                                                <div class="row-fluid">
                                                    <p class="span4 field">
                                                        <span class="wpcf7-form-control-wrap your-name"><input
                                                                type="text" name="NAME" required value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                placeholder="Имя:"/></span>
                                                    </p>
                                                    <p class="span4 field">
                                                        <span class="wpcf7-form-control-wrap your-email"><input
                                                                type="email" name="EMAIL" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                required placeholder="E-mail:"/></span>
                                                    </p>
                                                    <p class="span4 field">
                                                        <span class="wpcf7-form-control-wrap your-phone"><input
                                                                type="text" name="PHONE" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text" required
                                                                placeholder="Телефон:"/></span>
                                                    </p>
                                                </div>
                                                <p class="field"><span
                                                        class="wpcf7-form-control-wrap your-message"><textarea
                                                            name="TEXT" cols="40" rows="10"
                                                            class="wpcf7-form-control wpcf7-textarea"
                                                            aria-invalid="false"
                                                            placeholder="Сообщение:"></textarea></span>
                                                </p>
                                                <p class="submit-wrap">
                                                    <!--													<input type="reset" value="clear" class="btn btn-primary"/>-->
                                                    <input type="submit" id="submit" value="Отправить"
                                                           class="wpcf7-form-control wpcf7-submit btn btn-primary"/>
                                                </p>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>--}}
                                    </div>
                                </div><!-- .row (end) -->
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
