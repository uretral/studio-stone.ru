
@foreach($groups as $group)
    <ul class="posts-grid row-fluid unstyled home-grid">
        @foreach($group as $catalogItem)
            <li class="span4">
                <figure class="featured-thumbnail thumbnail">
                    <a href="{{route('catalog')}}/{{$catalogItem->slug}}" title="Image Format">
                        <img src="{{asset('storage/'.@$catalogItem->image->path)}}" alt="Image Format"/>
                    </a>
                </figure>
                <!--<span class="zoom-icon"></span>-->
                <div class="clear"></div>
                <h5>
                    <a href="{{route('catalog')}}/{{$catalogItem->slug}}" title="Image Format">
                        {{$catalogItem->title}}
                    </a>
                </h5>
            </li>
        @endforeach
    </ul>
@endforeach


