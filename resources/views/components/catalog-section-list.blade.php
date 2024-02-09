<div id="content" class="row">
    <div class="span12" data-motopress-type="loop"
         data-motopress-loop-file="loop/loop-portfolio2.php">
        <div class="page_content">
            <div class="clear"></div>
        </div>


        <ul id="portfolio-grid" class="filterable-portfolio thumbnails portfolio-2cols"
            data-cols="2cols">


            <script>
                jQuery(document).ready(function ($) {
                    var $container = $('#portfolio-grid'),
                        items_count = $(".portfolio_item").size();

                    $(window).load(function () {
                        setColumnWidth();
                        $container.isotope({
                            itemSelector: '.portfolio_item',
                            hiddenClass: 'portfolio_hidden',
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

            @foreach($products as $product)

                <li class="portfolio_item">
                    <div class="portfolio_item_holder">

                        <figure class="thumbnail thumbnail__portfolio">
                            <a href="{{route('catalog')}}/{{@$catalog->slug}}/{{@$product->id}}" class="image-wrap" title="Image Format">
                                <img src="{{asset("storage/".@$product->previewImage->path)}}" alt="Image Format"/>
                            </a>
                        </figure>

                        <div class="caption caption__portfolio">
                            <h3>
                                <a href="{{route('catalog')}}/{{@$catalog->slug}}/{{@$product->id}}">
                                       {{@$product->title}}
                                </a>
                            </h3>

                        </div>

                    </div>
                </li>
            @endforeach

        </ul>

        @if($products->total() > $products->perPage())
            <div class="pagination pagination__posts">
                <ul>
                    @for ($item = 1; $item <= $products->lastPage(); $item ++)

                        @if($item == $products->currentPage())
                            <li class="active">
                                <a>{{$item}}</a>
                            </li>
                        @else
                            <li>
                                @if($item != 1)
                                    <a class="inactive" href="?PAGEN_1={{$item}}">{{$item}}</a>
                                @else
                                    <a class="inactive" href="{{$products->getOptions()['path']}}">{{$item}}</a>
                                @endif
                            </li>
                        @endif

                    @endfor
                </ul>
            </div>
        @endif

    </div>
</div>

