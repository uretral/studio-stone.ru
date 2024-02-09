@extends('tpl.main')

@section('main')

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="page-Portfolio2Cols-filterable.php"
                     data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="static"
                             data-motopress-static-file="static/static-title.php">
                            <section class="title-section">

                                <h1 class="title-header">{{@$page->title}}</h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li>
                                        <a href="/" title="Главная" itemprop="url">Главная</a>
                                    </li>
                                    <li class="divider"></li>
                                    <a href="{{route('catalog')}}" title="Каталог камня" itemprop="url">Каталог камня</a>
                                    <li class="divider"></li>
                                    <li>
                                        <span>{{@$page->title}}</span>
                                    </li>
                                </ul>                            <!-- END BREADCRUMBS -->
                            </section>
                        </div>
                    </div>

                    @if($page->id)
                        <x-catalog-section-list :section="$page->id"/>
                    @endif


                    <div class="row">
                        <div class="span12" data-motopress-type="loop"
                             data-motopress-loop-file="loop/loop-portfolio2.php">
                            <div class="page_content">
                                <div class="clear"></div>
                                <br/>
                                <br/>
                            </div>
                        </div>

                        <div class="span12">
                            <div class="page_content">
                                {!! @$page->text !!}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
