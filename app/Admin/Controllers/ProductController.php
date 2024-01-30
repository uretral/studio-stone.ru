<?php

namespace App\Admin\Controllers;

use App\Models\Catalog;
use App\Models\Color;
use App\Models\Country;
use App\Models\Material;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Product as Model;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Разделы каталога';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Model);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('active', 'Активность')->switch()->sortable();
        $grid->column('sort', 'Сортировка')->sortable()->editable();
        $grid->column('slug', 'slug')->sortable()->editable();
        $grid->column('title', 'Заголовок')->sortable()->editable();
        $grid->column('price', 'Цена')->sortable()->editable();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Model::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Model);

        $form->display('id', __('ID'));
        $form->switch('active','Активность')->default(1);
        $form->number('sort','Сортировка')->default(500);
        $form->text('slug','slug');
        $form->text('title','Название');
        $form->currency('price','Цена');
        $form->number('views','Кол-во просмотров');
        $form->select('parent_id','Каталог')->options(Catalog::pluck('title','id'));
        $form->select('color_id','Цвет')->options(Color::pluck('title','id'));
        $form->select('country_id','Страна')->options(Country::pluck('title','id'));
        $form->select('material_id','Материал')->options(Material::pluck('title','id'));
        $form->textarea('description','Описание');
        $form->textarea('text','Описание полное');
        $form->textarea('text','Описание полное');
        $form->image('previewImage.path','Картинка (превью)')->move('products');
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }
}
