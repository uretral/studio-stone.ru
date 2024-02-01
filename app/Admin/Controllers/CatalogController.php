<?php

namespace App\Admin\Controllers;

use App\Models\Catalog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Catalog as Model;

class CatalogController extends AdminController
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
    protected function grid(): Grid
    {
        $grid = new Grid(new Model);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('active', 'Активность')->switch()->sortable();
        $grid->column('sort', 'Сортировка')->sortable()->editable();
        $grid->column('slug', 'slug')->sortable()->editable();
        $grid->column('title', 'Заголовок')->sortable()->editable();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id): Show
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
    protected function form(): Form
    {
        $form = new Form(new Model);

        $form->display('id', __('ID'));
        $form->switch('active','Активность')->default(1);
        $form->number('sort','Сортировка')->default(500);
        $form->text('slug','slug');
        $form->text('title','Название');
        $form->image('image.path','Изображение')->move('catalog');
        $form->hidden('image.model')->default(Catalog::class);
        $form->hidden('image.type')->default('previewImage');
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }
}
