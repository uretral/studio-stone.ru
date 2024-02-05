@extends('tpl.main')

@section('main')

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="page-Portfolio3Cols-filterable.php"
                     data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="static"
                             data-motopress-static-file="static/static-title.php">
                            <section class="title-section">
                                <h1 class="title-header">{{$page->pagetitle}}</h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li>
                                        <a href="{{route('index')}}" title="Главная" itemprop="url">Главная</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <span>{{$page->pagetitle}}</span>
                                    </li>
                                </ul>
                                <!-- END BREADCRUMBS -->
                            </section><!-- .title-section -->
                        </div>
                    </div>
                    <div id="content" class="row">
                        <div class="span12" data-motopress-type="loop"
                             data-motopress-loop-file="loop/loop-portfolio3.php">

                            <ul id="portfolio-grid" class="filterable-portfolio thumbnails portfolio-3cols"
                                data-cols="3cols">


                                <script>
                                    jQuery(document).ready(function ($) {
                                        var $container = $('#portfolio-grid'),
                                            items_count = $(".portfolio_item").size();

                                        $(window).load(function () {
                                            setColumnWidth();
                                            $container.isotope({
                                                itemSelector: '.portfolio_item',
                                                hiddenClass: 'portfolio_hidd',
                                                resizable: false,
                                                transformsEnabled: true,
                                                layoutMode: 'fitRows'
                                            });
                                        });

                                        function getNumColumns() {
                                            var $folioWrapper = $('#portfolio-grid').data('cols');

                                            if ($folioWrapper == '2cols') {
                                                var winWidth = $("#portfolio-grid").width(),
                                                    column = 2;
                                                if (winWidth < 380) column = 1;
                                                return column;
                                            } else if ($folioWrapper == '3cols') {
                                                var winWidth = $("#portfolio-grid").width(),
                                                    column = 3;
                                                if (winWidth < 380) column = 1;
                                                else if (winWidth >= 380 && winWidth < 788) column = 2;
                                                else if (winWidth >= 788 && winWidth < 1160) column = 3;
                                                else if (winWidth >= 1160) column = 3;
                                                return column;
                                            } else if ($folioWrapper == '4cols') {
                                                var winWidth = $("#portfolio-grid").width(),
                                                    column = 4;
                                                if (winWidth < 380) column = 1;
                                                else if (winWidth >= 380 && winWidth < 788) column = 2;
                                                else if (winWidth >= 788 && winWidth < 1160) column = 3;
                                                else if (winWidth >= 1160) column = 4;
                                                return column;
                                            }
                                        }

                                        function setColumnWidth() {
                                            var columns = getNumColumns(),
                                                containerWidth = $("#portfolio-grid").width(),
                                                postWidth = containerWidth / columns;
                                            postWidth = Math.floor(postWidth);

                                            $(".portfolio_item").each(function (index) {
                                                $(this).css({"width": postWidth + "px"});
                                            });
                                        }

                                        function arrange() {
                                            setColumnWidth();
                                            $container.isotope('reLayout');
                                        }

                                        $(window).on("debouncedresize", function (event) {
                                            arrange();
                                        });

                                        // Filter projects
                                        $('.filter a').click(function () {
                                            var $this = $(this).parent('li');
                                            // don't proceed if already active
                                            if ($this.hasClass('active')) {
                                                return;
                                            }

                                            var $optionSet = $this.parents('.filter');
                                            // change active class
                                            $optionSet.find('.active').removeClass('active');
                                            $this.addClass('active');

                                            var selector = $(this).attr('data-filter');
                                            $container.isotope({filter: selector});

                                            var hiddenItems = 0,
                                                showenItems = 0;
                                            $(".portfolio_item").each(function () {
                                                if ($(this).hasClass('portfolio_hidden')) {
                                                    hiddenItems++;
                                                }
                                                ;
                                            });

                                            showenItems = items_count - hiddenItems;
                                            if (($(this).attr('data-count')) > showenItems) {
                                                $(".pagination__posts").css({"display": "block"});
                                            } else {
                                                $(".pagination__posts").css({"display": "none"});
                                            }
                                            return false;
                                        });
                                    });
                                </script>

                                <x-catalog-catalog/>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
