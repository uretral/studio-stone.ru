<div class="row">
    <div class="span12 right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-blog.php">
        @foreach($newsList as $item)
            <div class="post_wrapper">
                <article class=" post type-post status-publish format-standard hentry category-ex-ea-commodo-consequat tag-augue-quis tag-bibendum-mauris tag-elit tag-ipsum-dolor tag-tempor post__holder cat-5-id">
                    <header class="post-header">
                        <h2 class="post-title">
                            <a href="{{route('news')}}/{{$item->slug}}" title="Donec tempor libero">{{$item->title}}</a>
                        </h2>
                    </header>
                    @if($item->previewImage)
                        <figure class="featured-thumbnail thumbnail">
                            <a href="{{route('news')}}/{{$item->slug}}">
                                <img src="//" data-src="{{asset("storage/".$item->previewImage->path)}}" style="max-width: 250px; width: 250px" alt="Donec tempor libero">
                            </a>
                        </figure>
                    @endif

                    <!-- Post Content -->
                    <div class="post_content">
                        <div class="excerpt">
                                {!! $item->description !!}
                        </div>
                        <a href="{{route('news')}}/{{$item->slug}}">Читать далее</a>
                        <div class="clear"></div>
                    </div>


                    <!-- Post Meta -->
                    <div class="post_meta meta_type_line">
                        <div class="post_meta_unite clearfix">
                            <div class="post_date">
                                <i class="icon-calendar"></i>
                                <time datetime="2013-03-05T20:31:03">
                                    {{\Carbon\Carbon::parse($item->updated_at)->translatedFormat('d F Y')}}
                                </time>
                            </div>
                        </div>
                    </div><!--// Post Meta --></article>
            </div>
        @endforeach

{{--        $arResult['NAV_STRING']--}}
            <!-- Posts navigation -->
    </div>
</div>
