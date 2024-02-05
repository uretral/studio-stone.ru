@extends('tpl.main')

@section('main')

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="index.php" data-motopress-wrapper-type="content">
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
                                    </li><li class="divider"></li>
                                    <li>
                                        <span>{{$page->title}}</span>
                                    </li>
                                </ul>
                                    <!-- END BREADCRUMBS -->
                            </section><!-- .title-section -->
                        </div>
                    </div>

                    <x-news-list/>

                </div>
            </div>
        </div>
    </div>

@endsection
