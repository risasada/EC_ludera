<?php

namespace App\Admin\Controllers;

use App\Models\Items;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Items';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Items());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'));
        $grid->column('gender', __('Gender'));
        $grid->column('categories', __('Categories'));
        $grid->column('designers', __('Designers'));
        $grid->column('made_in', __('Made in'));
        $grid->column('material', __('Material'));
        $grid->column('XS', __('XS'));
        $grid->column('S', __('S'));
        $grid->column('M', __('M'));
        $grid->column('L', __('L'));
        $grid->column('LL', __('LL'));
        $grid->column('img_url1', __('Img url1'));
        $grid->column('img_url2', __('Img url2'));
        $grid->column('img_url3', __('Img url3'));
        $grid->column('img_url4', __('Img url4'));

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
        $show = new Show(Items::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
        $show->field('gender', __('Gender'));
        $show->field('categories', __('Categories'));
        $show->field('designers', __('Designers'));
        $show->field('made_in', __('Made in'));
        $show->field('material', __('Material'));
        $show->field('XS', __('XS'));
        $show->field('S', __('S'));
        $show->field('M', __('M'));
        $show->field('L', __('L'));
        $show->field('LL', __('LL'));
        $show->field('img_url1', __('Img url1'));
        $show->field('img_url2', __('Img url2'));
        $show->field('img_url3', __('Img url3'));
        $show->field('img_url4', __('Img url4'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Items());

        $form->text('name', __('Name'));
        $form->number('price', __('Price'));
        $form->text('gender', __('Gender'));
        $form->text('categories', __('Categories'));
        $form->text('designers', __('Designers'));
        $form->text('made_in', __('Made in'));
        $form->text('material', __('Material'));
        $form->number('XS', __('XS'));
        $form->number('S', __('S'));
        $form->number('M', __('M'));
        $form->number('L', __('L'));
        $form->number('LL', __('LL'));
        $form->text('img_url1', __('Img url1'));
        $form->text('img_url2', __('Img url2'));
        $form->text('img_url3', __('Img url3'));
        $form->text('img_url4', __('Img url4'));

        return $form;
    }
}
