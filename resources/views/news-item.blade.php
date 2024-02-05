@extends('tpl.main')

@section('main')

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="index.php" data-motopress-wrapper-type="content">
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
                                        <a href="{{route('news')}}" title="Новости" itemprop="url">Новости</a>
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
                    <div class="row">
                        <div class="span12 right" id="content" data-motopress-type="loop"
                             data-motopress-loop-file="loop/loop-blog.php">

                            <div class="post_wrapper">
                                <article
                                    class=" post type-post status-publish format-standard hentry category-ex-ea-commodo-consequat tag-augue-quis tag-bibendum-mauris tag-elit tag-ipsum-dolor tag-tempor post__holder cat-5-id">
                                    <!-- Post Content -->
                                    <div class="post_content">
                                        <div class="excerpt">
                                            {!! $page->text !!}
                                        </div>
                                        <div class="clear"></div>
                                    </div>


                                    <!-- Post Meta -->
                                    <div class="post_meta meta_type_line">
                                        <div class="post_meta_unite clearfix">
                                            <div class="post_date">
                                                <i class="icon-calendar"></i>
                                                <time datetime="{{$page->updated_at}}">

                                                    {{\Carbon\Carbon::parse($page->updated_at)->translatedFormat('d F Y')}}

                                                </time>
                                            </div>
                                        </div>
                                    </div><!--// Post Meta --></article>
                            </div>


                            <!-- Posts navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
