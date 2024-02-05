<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\News as Model;

class NewsController extends AdminController
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

        $form
            ->tab('Основа', function (Form $form) {
                $form->display('id', __('ID'));
                $form->switch('active', 'Активность')->default(1);
                $form->number('sort', 'Сортировка')->default(500);
                $form->text('slug', 'slug');
                $form->text('title', 'Название');
                $form->textarea('description', 'Описание');
                $form->textarea('text', 'Описание полное');
                $form->image('previewImage.path', 'Картинка (превью)')->move('news');
                $form->hidden('previewImage.model')->default(Model::class);
                $form->hidden('previewImage.type')->default('preview');
                $form->image('detailImage.path', 'Картинка (Основная)')->move('news');
                $form->hidden('detailImage.model')->default(Model::class);
                $form->hidden('detailImage.type')->default('detail');
                $form->display('created_at', __('Created At'));
                $form->display('updated_at', __('Updated At'));
            })
            ->tab('SEO', function (Form $form) {
                $form->textarea('meta.title');
                $form->textarea('meta.metatitle');
                $form->textarea('meta.tags');
                $form->textarea('meta.keywords');
                $form->textarea('meta.description');
                $form->hidden('meta.model')->default(Model::class);
            });

        return $form;
    }


}
