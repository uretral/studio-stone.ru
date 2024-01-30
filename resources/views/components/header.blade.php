<header class="motopress-wrapper header">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php"
                 data-motopress-wrapper-type="header" data-motopress-id="5a52228b26678">
                <div class="row">
                    <div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
                        <!-- BEGIN LOGO -->
                        <div class="logo pull-left">
                            <a style="display: inline-block; text-transform: uppercase; font-size: 20px; margin-right: 15px; font-weight: 700"
                               href="/" class="logo_h logo_h__img">Студия - stone

                                <p style="
									    border: none;
    letter-spacing: 0px;
    padding: 0;
    margin: 10px 0 0 15px;
    background: none;
    transition: all 0.4s;
font-size: 17px;
    font-weight: 300;

    display: inline-block;
">{{@$phone}}</p>

                            </a>
                        </div>
                        <!-- END LOGO -->    </div>
                    <div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
                        <!-- BEGIN MAIN NAVIGATION -->
                        <nav class="nav nav__primary clearfix">

                            <ul id="topnav" class="sf-menu sf-js-enabled">

                                @foreach($menu as $menuItem)
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page
                                        @if($menuItem->view == 'catalog') menu-item-has-children @endif"
                                    >
                                        <a href="{{route($menuItem->view)}}" class="selected">{{$menuItem->title}}</a>
                                        @if($menuItem->view == 'catalog')
                                            <ul class="sub-menu" style="visibility: hidden; display: none;">
                                                @foreach($catalog as $catalogItem)
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                            href="{{route($menuItem->view)}}/{{$catalogItem->slug}}">{{$catalogItem->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <select class="select-menu">
                                <option value="#">Меню ...</option>
                                @foreach($menu as $menuItem)
                                    <option value="{{route($menuItem->view)}}">{{$menuItem->title}}</option>
                                    @if($menuItem->view == 'catalog')
                                        @foreach($catalog as $catalogItem)
                                            <option value="{{route($menuItem->view)}}/{{$catalogItem->slug}}">–{{$catalogItem->title}}
                                            </option>
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </nav>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
