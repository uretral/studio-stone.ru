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


        $form->tab('Настройки', function (Form $form) {
            $form->display('id', __('ID'));
            $form->switch('active','Активность')->default(1);
            $form->text('slug','slug');
            $form->select('type','Участвует в меню')->options(Menu::pluck('title','id'));
            $form->text('title','Название');

            $form->display('created_at', __('Created At'));
            $form->display('updated_at', __('Updated At'));

        });



        $form->tab('Текстовые вставки', function (Form $form) {
            switch (request()->segment(3)) {
                case 1:
                    $this->indexPage($form);
                    break;
                case 2:
                    $this->catalogPage($form);
                    break;


            }
        });

        $form->tab('SEO', function (Form $form) {
            $form->text('pagetitle','Тайтл страницы');
            $form->text('metatitle','meta title');
            $form->textarea('tags','meta tags');
            $form->textarea('description','meta description');
            $form->textarea('keywords','meta keywords');
        });








//        $form->saving(function (Form $form){
//            $form->slug = Str::slug($form->title);
//        });



        return $form;
    }

    public function indexPage( $form) {
      return  $form->embeds('composite','Текстовые вставки', function ( $form) {
          $form->textarea('title');
          $form->textarea('textLeft');
          $form->textarea('textRight');
          $form->textarea('textMore');
          $form->textarea('catalogTitle');
          $form->textarea('catalogAfterTitle');
          $form->textarea('catalogAfterText');
        });
    }

    public function catalogPage($form) {
        return  $form->embeds('composite','Текстовые вставки', function ( $form) {

            $form->textarea('title');
            $form->textarea('textLeft');
            $form->textarea('textRight');
            $form->textarea('catalogTitle');
            $form->textarea('catalogAfterTitle');
            $form->textarea('catalogAfterText');
        });
    }
}
