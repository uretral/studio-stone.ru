@foreach($catalog as $item)
    <li class="portfolio_item">
        <div class="portfolio_item_holder">

            <figure class="thumbnail thumbnail__portfolio">
                <a href="{{route('catalog')}}/{{$item->slug}}" class="image-wrap">
                    <img src="{{asset('storage/'.@$item->image->path)}}" alt="Image Format"
                         style="width: 376px"/>
                    <span class="zoom-icon"></span></a>
            </figure><!--/.thumbnail__portfolio-->

            <div class="caption caption__portfolio">
                <h3>
                    <a href="{{route('catalog')}}/{{$item->slug}}">{{$item->title}}</a>
                </h3>
            </div>

        </div>
    </li>
@endforeach
