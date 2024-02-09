@extends('tpl.main')

@section('main')

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="single-portfolio.php"
                     data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="static"
                             data-motopress-static-file="static/static-title.php">
                            <section class="title-section">
                                <h1 class="title-header">{{$page->title}}</h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li>
                                        <a href="{{route('index')}}" title="Главная" itemprop="url">Главная</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{route('catalog')}}" title="Каталог камня" itemprop="url">Каталог
                                            камня</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{route('catalog')}}/{{$page->catalog->slug}}"
                                           title="{{$page->catalog->title}}"
                                           itemprop="url">{{$page->catalog->title}}</a>
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
                        <div class="span12" data-motopress-type="loop"
                             data-motopress-loop-file="loop/loop-single-portfolio.php">
                            <!--BEGIN .hentry -->
                            <div class="post-497 portfolio type-portfolio status-publish hentry" id="post-497">
                                <div class="row">
                                    <div class="span7">
                                        <figure class="featured-thumbnail thumbnail large">
                                            <div class="arrows">
                                                <a class="arr left" href="javascript:;"></a>
                                                <a class="arr right" href="javascript:;"></a>
                                            </div>
                                            <a href="{{asset('storage/'.$page->detailImage->path)}}"
                                               class="fancybox tgt-a" rel="gallery">
                                                <img class="tgt" src="{{asset('storage/'.$page->detailImage->path)}}"
                                                     alt="Image Format"/>
                                            </a>

                                            <div class="hidden nest">
                                                @foreach(@$page->gallery as $galleryItem)
                                                    <a class="fancybox" rel="gallery"
                                                       href="{{asset('storage/'.$galleryItem->path)}}"></a>
                                                @endforeach
                                            </div>
                                        </figure>

                                        <div class="clear"></div>
                                    </div>
                                    <script>
                                        $(document).ready(function () {
                                            $(".fancybox")
                                                .attr('rel', 'gallery')
                                                .fancybox({
                                                    padding: 0
                                                });
                                        });
                                    </script>

                                    <!-- BEGIN .entry-content -->
                                    <div class="entry-content span5">
                                        <!-- BEGIN .entry-meta -->
                                        <div class="">
                                            <div class="entry-meta ">
                                                <ul class="portfolio-meta-list">
                                                    <li>
                                                        <strong class="portfolio-meta-key">Материал:</strong>
                                                        <span>{{$page->material->title}}</span><br/>
                                                    </li>

                                                    <li>
                                                        <strong class="portfolio-meta-key">Цвет:</strong>
                                                        <span>{{$page->color->title}}</span><br/>
                                                    </li>

                                                    <li>
                                                        <strong class="portfolio-meta-key">Производитель:</strong>
                                                        <span>{{$page->country->title}}</span><br/>
                                                    </li>

                                                    <li><strong class="portfolio-meta-key">Цена за материал
                                                            (слэб):</strong>
                                                        <span>{{number_format($page->rate, 0,' ', ' ')}} руб./м2</span><br/>
                                                    </li>
                                                </ul>
                                            </div><!-- END .entry-meta -->

                                            <div class="">
                                                {!! $page->description !!}
                                            </div>
                                        </div>
                                    </div><!-- END .entry-content -->
                                </div><!-- .row -->

                                <style>
                                    .shlop-container {
                                        text-align: right;
                                        font-size: 14px;
                                        text-transform: uppercase;

                                    }

                                    .off {
                                        display: none;
                                    }

                                    .shlop {

                                    }
                                </style>

                                <script>
                                    $(document).ready(function () {
                                        $(document).on('click', '.shlop-link.closed', function () {
                                            $(document).find('.shlop').removeClass('off');
                                            $(this).removeClass('closed');
                                            $(this).addClass('opened');
                                            $(this).html('Свернуть');
                                        });
                                        $(document).on('click', '.shlop-link.opened', function () {
                                            $(document).find('.shlop').addClass('off');
                                            $(this).removeClass('opened');
                                            $(this).addClass('closed');
                                            $(this).html('УЗНАТЬ БОЛЬШЕ');
                                        });

                                    });
                                    $(document).ready(function () {
                                        var img = [];
                                        $('[rel="gallery"]').each(function (i, e) {
                                            img[i] = $(e).attr('href');
                                        });



                                        $(document).on('click', 'a.arr', function () {

                                            var imgLen = $(img).size();
                                            var tgt = $('.tgt');
                                            var tgtSrc = $(tgt).attr('src');
                                            var I = img.indexOf(tgtSrc);
                                            var t;

                                            if ($(this).hasClass('right')) {
                                                if (I == imgLen - 1) {
                                                    t = 0
                                                } else {
                                                    t = I + 1;
                                                }
                                            } else {
                                                if (I == 0) {
                                                    t = imgLen - 1
                                                } else {
                                                    t = I - 1;
                                                }
                                            }
                                            $('.nest').html('');

                                            for (var k = 0, leng = img.length; k < leng; k++) {
                                                if (k != t) {
                                                    $('.nest').append('<a class="fancybox" rel="gallery" href="' + img[k] + '"></a>')
                                                }

                                            }

                                            $('.tgt-a').attr('href', img[t]);

                                            $(tgt).attr('src', img[t]);
                                        });




                                    });

                                    function oHeight() {
                                        var oHeight = $('.tgt-a').height();
                                        var top = oHeight/2-25;
                                        $('a.arr').css('top',top+'px');
                                        console.log(top);
                                    }

                                    $(document).ready(function(){
                                        oHeight()
                                    });
                                    $(document).resize(function(){
                                        oHeight()
                                    });
                                </script>


                                <div class="row ">
                                    <div class="span12 shlop off">
                                        {!! $page->text !!}
                                    </div>
                                    <div class="span12 shlop-container">
                                        <a class="shlop-link closed" href="javascript:;">Узнать больше</a>
                                    </div>

                                </div>

{{--@dump(route('product',['slug' => $page->section->slug, 'id' => $page->id]))--}}
{{--                                @dump($page->similar)--}}
                                <div class="row">
                                    <div class="span7">
                                        @if($page->similar->count())
                                            <div class="related-posts">
                                                <h3 class="related-posts_h"><span>ПОХОЖИЕ ИЗДЕЛИЯ</span></h3>
                                                <ul class="related-posts_list clearfix">
                                                    @foreach($page->similar as $similar)
                                                        <li class="related-posts_item">
                                                            <figure class="thumbnail featured-thumbnail">
                                                                <a href="{{route('product',['slug' => $similar->section->slug,'id' => $similar->id])}}"
                                                                   title="{{@$similar->title}}">
                                                                    <img
                                                                        data-src="{{asset('storage/'.@$similar->previewImage->path)}}"
                                                                        alt="Slideshow Format"/>
                                                                </a>
                                                            </figure>
                                                            <a href="{{route('product',['slug' => $similar->section->slug,'id' => $similar->id])}}">
                                                                {{@$similar->title}}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div><!-- BEGIN Comments -->

                                        @endif


                                        {{--
                                                                                <div id="respond">

                                                                                    <h3><span>ОСТАВЬТЕ ЗАЯВКУ</span></h3>

                                                                                    <div class="cancel-comment-reply">
                                                                                        <small>
                                                                                            <a rel="nofollow" id="cancel-comment-reply-link" href="/wordpress_48469/portfolio-view/image-format/#respond" style="display:none;">
                                                                                                Click here to cancel reply.
                                                                                            </a>
                                                                                        </small>
                                                                                    </div>



                                                                                    <form action="javascript:;" name="callback" id="commentform">

                                                                                        <div id="response">

                                                                                        </div>


                                                                                        <input type="hidden" name="ID" value="<?=$arResult['ID']?>"/>
                                                                                        <input type="hidden" name="PRODUCT_NAME" value="<?=$arResult['NAME']?>"/>




                                            <p class="field">
                                                <input type="text" name="NAME" id="author" value="" required placeholder="Имя*" >
                                            </p>

                                            <p class="field">
                                                <input type="text" name="EMAIL" id="email" value="" required placeholder="Email*"/>
                                            </p>

                                            <p class="field">
                                                <input type="text" name="PHONE" id="url" required placeholder="Телефон*" value="" />
                                            </p>


                                             <p>You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></small></p>

                                            <p>
                                               <textarea name="TEXT" id="TEXT" cols="58" rows="10" tabindex="4"  onfocus="if(this.value=='Ваш комментарий*'){this.value=''}" onblur="if(this.value==''){this.value='Ваш комментарий*'}">Ваш комментарий*</textarea>
                                            </p>

                                            <p>
                                                <input name="submit" type="submit" class="btn btn-primary" id="submit" tabindex="5" value="Отправить"/>
                                            </p>

                                        </form>


                                    </div>
                                --}}
                                        <!-- END Comments -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
