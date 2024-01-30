<?php

namespace App\Admin\Controllers;

use App\Models\Menu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Category as Model;
use Illuminate\Support\Str;

class MenuTopController extends AdminController
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
        return Model::tree();
/*        $grid = new Grid(new Model);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('active', 'Активность')->switch()->sortable();
        $grid->column('sort', 'Сортировка')->sortable()->editable();
        $grid->column('slug', 'slug')->sortable()->editable();
        $grid->column('title', 'Заголовок')->sortable()->editable();

        return $grid;*/
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
        $form->text('slug','slug');
        $form->select('type','Участвует в меню')->options(Menu::pluck('title','id'));
        $form->text('title','Название');
        $form->text('pagetitle','Тайтл страницы');
        $form->text('metatitle','meta title');
        $form->textarea('tags','meta tags');
        $form->textarea('description','meta description');
        $form->textarea('keywords','meta keywords');
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

//        $form->saving(function (Form $form){
//            $form->slug = Str::slug($form->title);
//        });



        return $form;
    }
}
