@extends('tpl.main')

@section('main')

    <x-top-slider/>

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">

                    <div class="row">
                        <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                            <div id="post-203" class="post-203 page type-page status-publish hentry page">
                                <div class="wrap2">
                                    <div class="title-box clearfix home-title">
                                        <h2 class="title-box_primary">
                                            <a class="admin" rel=""></a>
                                            <span>
											{!! @$page?->composite['title'] !!}
										</span>
                                        </h2>
                                    </div><!-- //.title-box -->
                                    <style>
                                        .u-table {
                                            display: table;
                                            width: 100%;
                                        }

                                        .u-col {
                                            display: table-cell;
                                            width: 50%;
                                        }

                                        .u-col p {
                                            padding: 10px 20px;
                                        }
                                    </style>
                                    <div class="row">
                                        <div class="span6">
                                            {!! @$page?->composite['textLeft'] !!}
                                        </div>
                                        <div class="span6">{!! @$page?->composite['textRight'] !!}</div>


                                    </div><!-- .row (end) -->
                                    <div class="row">
                                        <div class="span12">
                                            <a id="show_more" href="javascript:;">Узнать больше -></a>
                                        </div>
                                    </div>
                                    <div class="row showed-after" style="display: none">
                                        {!! @$page?->composite['textMore'] !!}

                                    </div>
                                </div> <!-- wrap (end) -->
                                <script>
                                    $(document).ready(function () {
                                        $(document).on('click', '#show_more', function () {
                                            $('.showed-after').show();
                                            $(this).hide();
                                        });
                                    });
                                </script>

                                <div class="title-box clearfix home-title1">
                                    <h2 class="title-box_primary">
                                        <span> {!! @$page?->composite['catalogTitle'] !!}</span></h2>
                                </div><!-- //.title-box -->
                                <x-catalog-index/>
                                <div class="wrap" style="color: #000!important;">
                                    <div class="title-box clearfix wrap-title">
                                        <h2 class="title-box_primary" style="color: #000!important;">
                                            <span
                                                style="color: #000!important;">{!! @$page?->composite['catalogAfterTitle'] !!}</span>
                                        </h2>
                                    </div><!-- //.title-box -->
                                    <div class="row">
                                        <div class="span">
                                            {!! @$page?->composite['catalogAfterText'] !!}
                                        </div>
                                        <div class="span6">
                                            <!--										<iframe width="560" height="315" src="https://www.youtube.com/embed/e4kVQkw4CWw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
                                            <!--										 $APPLICATION->IncludeFile(SITE_DIR.'/local/inc/edit_img.php',array("HLBLOCK" => 2,"ITEM" => 1,'OPTIONS' => 'alt="home" width="570" height="500" class="aligncenter size-full wp-image-1931"'))-->
                                        </div>
                                    </div><!-- .row (end) -->
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
