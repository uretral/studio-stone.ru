@extends('tpl.main')

@section('main')

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="index.php" data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
                            <section class="title-section">
                                <h1 class="title-header">
                                    Услуги
                                </h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li>

                                        <a href="/" title="Главная" itemprop="url">Главная</a>
                                    </li><li class="divider"></li>
                                    <li>
                                        <span>Услуги</span>
                                    </li>
                                </ul>
                                <!-- END BREADCRUMBS -->
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12 right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-blog.php">

                            <div class="post_wrapper">
                                <article class=" post type-post status-publish format-standard hentry category-ex-ea-commodo-consequat tag-augue-quis tag-bibendum-mauris tag-elit tag-ipsum-dolor tag-tempor post__holder cat-5-id">
                                    <!-- Post Content -->
                                    <div class="post_content">
                                        <div class="excerpt">
                                            <table class="table  table-bordered table-striped span12">

                                                <thead>
                                                <tr class="active">
                                                    <th class="span6">Наименование работ </th>
                                                    <th class="span2">Единица измерения</th>
                                                    <th class="span2">мрамор</th>
                                                    <th class="span2">гранит</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr >
                                                    <td class="bold" style="text-align: center;" colspan="4">Раскрой камня</td>
                                                </tr>

                                                <tr>
                                                    <td>прямолинейный рез</td>
                                                    <td>пог.метр</td>
                                                    <td>360р.</td>
                                                    <td>530р.</td>
                                                </tr>
                                                <tr>
                                                    <td>криволинейный рез</td>
                                                    <td>пог.метр</td>
                                                    <td>670р.</td>
                                                    <td>860р.</td>
                                                </tr>
                                                <tr>
                                                    <td>косой рез</td>
                                                    <td>пог.метр</td>
                                                    <td>470р.</td>
                                                    <td>690р.</td>
                                                </tr>
                                                <tr>
                                                    <td>подрезка изделия под 45°</td>
                                                    <td>пог.метр</td>
                                                    <td>670р.</td>
                                                    <td>890р.</td>
                                                </tr>
                                                <tr>
                                                    <td>коэффициент на прямоугольные изделия (к площади заготовки)</td>
                                                    <td>коэф.</td>
                                                    <td>1,4</td>
                                                    <td>1,4</td>
                                                </tr>
                                                <tr>
                                                    <td>коэффициент на криволинейные изделия (к площади заготовки)</td>
                                                    <td>коэф.</td>
                                                    <td>1,55</td>
                                                    <td>1,55</td>
                                                </tr>
                                                <tr>
                                                    <td>изделия сложной формы или раскроя, изделия общей площадью до 2м2 включит., детали изделий площадью более 2м2, изделия из эксклюзивных материалов</td>
                                                    <td>коэф.</td>
                                                    <td>1,9</td>
                                                    <td>1,9</td>
                                                </tr>
                                                <tr>
                                                    <td>изделия из эксклюзивных материалов общей площадью до 2м2 включительно, детали изделий из эксклюзивных материалов площадью более 2м2</td>
                                                    <td>коэф.</td>
                                                    <td>2,3</td>
                                                    <td>2,3</td>
                                                </tr>
                                                <tr>
                                                    <td class="bold" style="text-align: center;" colspan="4">Обработка камня</td>
                                                </tr>
                                                <tr>
                                                    <td>полировка торца с технологической фаской 45° шириной 2 мм "CD"</td>
                                                    <td>пог.метр</td>
                                                    <td>830р.</td>
                                                    <td>1&nbsp;250р.</td>
                                                </tr>
                                                <tr>
                                                    <td>полировка торца с технологической фаской 45° шириной от 5 мм "E"</td>
                                                    <td>пог.метр</td>
                                                    <td>1&nbsp;460р.</td>
                                                    <td>1&nbsp;660р.</td>
                                                </tr>
                                                <tr>
                                                    <td>фреза четверть круга "A","B"</td>
                                                    <td>пог.метр</td>
                                                    <td>1&nbsp;700р.</td>
                                                    <td>1&nbsp;890р.</td>
                                                </tr>
                                                <tr>
                                                    <td>фреза полукруг "V"</td>
                                                    <td>пог.метр</td>
                                                    <td>2&nbsp;080р.</td>
                                                    <td>2&nbsp;460р.</td>
                                                </tr>
                                                <tr>
                                                    <td>фреза сложная "H", "L", "D"</td>
                                                    <td>пог.метр</td>
                                                    <td>3&nbsp;020р.</td>
                                                    <td>3&nbsp;400р.</td>
                                                </tr>
                                                <tr>
                                                    <td>фреза сложная "O"</td>
                                                    <td>пог.метр</td>
                                                    <td>3&nbsp;220р.</td>
                                                    <td>3&nbsp;600р.</td>
                                                </tr>
                                                <tr>
                                                    <td>фреза сложная "F"</td>
                                                    <td>пог.метр</td>
                                                    <td>3&nbsp;600р.</td>
                                                    <td>3&nbsp;990р.</td>
                                                </tr>
                                                <tr>
                                                    <td>фреза сложная "M"</td>
                                                    <td>пог.метр</td>
                                                    <td>2&nbsp;460р.</td>
                                                    <td>2&nbsp;840р.</td>
                                                </tr>
                                                <tr>
                                                    <td>фреза сложная "I"</td>
                                                    <td>пог.метр</td>
                                                    <td>3&nbsp;780р.</td>
                                                    <td>4&nbsp;160р.</td>
                                                </tr>
                                                <tr>
                                                    <td>состaривание поверхности мрамора / термообработка поверхности гранита</td>
                                                    <td>кв.метр</td>
                                                    <td>2&nbsp;000р.</td>
                                                    <td>3&nbsp;020р.</td>
                                                </tr>
                                                <tr>
                                                    <td>нанесение антискользящей полосы шириной 70 мм</td>
                                                    <td></td>
                                                    <td>1&nbsp;330р.</td>
                                                    <td>1&nbsp;330р.</td>
                                                </tr>
                                                <tr>
                                                    <td>внутренний вырез с обработкой</td>
                                                    <td>шт.</td>
                                                    <td>3&nbsp;780р.</td>
                                                    <td>3&nbsp;990р.</td>
                                                </tr>
                                                <tr>
                                                    <td>внутренний вырез без обработки</td>
                                                    <td>шт.</td>
                                                    <td>3&nbsp;360р.</td>
                                                    <td>3&nbsp;680р.</td>
                                                </tr>
                                                <tr>
                                                    <td>вырез отверстия диаметром до 50 мм</td>
                                                    <td>шт.</td>
                                                    <td>570р.</td>
                                                    <td>760р.</td>
                                                </tr>
                                                <tr>
                                                    <td>армирование</td>
                                                    <td>пог.метр</td>
                                                    <td>900р.</td>
                                                    <td>900р.</td>
                                                </tr>
                                                <tr>
                                                    <td>склейка</td>
                                                    <td>пог.метр</td>
                                                    <td>690р.</td>
                                                    <td>690р.</td>
                                                </tr>
                                                <tr>
                                                    <td>вклейка крепежных элементов</td>
                                                    <td>шт.</td>
                                                    <td>380р.</td>
                                                    <td>380р.</td>
                                                </tr>
                                                <tr>
                                                    <td>подполировка шириной 50 мм</td>
                                                    <td>пог.метр</td>
                                                    <td>570р.</td>
                                                    <td>670р.</td>
                                                </tr>
                                                <tr>
                                                    <td>переполировка</td>
                                                    <td>кв.метр</td>
                                                    <td>3&nbsp;020р.</td>
                                                    <td>3&nbsp;400р.</td>
                                                </tr>
                                                <tr>
                                                    <td>изготовление капельника</td>
                                                    <td>пог.метр</td>
                                                    <td>330р.</td>
                                                    <td>440р.</td>
                                                </tr>
                                                <tr>
                                                    <td>закругление угла радиусом 10-40 мм</td>
                                                    <td>шт.</td>
                                                    <td>210р.</td>
                                                    <td>290р.</td>
                                                </tr>
                                                <tr>
                                                    <td>вырез канелюров шириной 25 мм</td>
                                                    <td>пог.метр</td>
                                                    <td>1&nbsp;900р.</td>
                                                    <td>2&nbsp;270р.</td>
                                                </tr>
                                                <tr>
                                                    <td>полировка второй стороны (при изготовлении изделия)</td>
                                                    <td>кв.метр</td>
                                                    <td>1&nbsp;900р.</td>
                                                    <td>2&nbsp;270р.</td>
                                                </tr>
                                                </tbody>

                                            </table>

                                        </div>
                                        <div class="clear"></div>
                                    </div>





@endsection
