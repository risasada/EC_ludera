<?php

namespace App\Admin\Controllers;

use App\Models\Oder;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class  extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header(trans('admin.index'))
            ->description(trans('admin.description'))
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header(trans('admin.detail'))
            ->description(trans('admin.description'))
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header(trans('admin.edit'))
            ->description(trans('admin.description'))
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header(trans('admin.create'))
            ->description(trans('admin.description'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Oder);

        $grid->id('ID');
        $grid->item_id('item_id');
        $grid->item('item');
        $grid->item_size('item_size');
        $grid->price('price');
        $grid->user_id('user_id');
        $grid->real_name('real_name');
        $grid->address('address');
        $grid->post_number('post_number');
        $grid->phone('phone');
        $grid->shipping_status('shipping_status');
        $grid->shipping_company('shipping_company');
        $grid->shipping_number('shipping_number');
        $grid->message_from_customer('message_from_customer');
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));

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
        $show = new Show(Oder::findOrFail($id));

        $show->id('ID');
        $show->item_id('item_id');
        $show->item('item');
        $show->item_size('item_size');
        $show->price('price');
        $show->user_id('user_id');
        $show->real_name('real_name');
        $show->address('address');
        $show->post_number('post_number');
        $show->phone('phone');
        $show->shipping_status('shipping_status');
        $show->shipping_company('shipping_company');
        $show->shipping_number('shipping_number');
        $show->message_from_customer('message_from_customer');
        $show->created_at(trans('admin.created_at'));
        $show->updated_at(trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Oder);

        $form->display('ID');
        $form->text('item_id', 'item_id');
        $form->text('item', 'item');
        $form->text('item_size', 'item_size');
        $form->text('price', 'price');
        $form->text('user_id', 'user_id');
        $form->text('real_name', 'real_name');
        $form->text('address', 'address');
        $form->text('post_number', 'post_number');
        $form->text('phone', 'phone');
        $form->text('shipping_status', 'shipping_status');
        $form->text('shipping_company', 'shipping_company');
        $form->text('shipping_number', 'shipping_number');
        $form->text('message_from_customer', 'message_from_customer');
        $form->display(trans('admin.created_at'));
        $form->display(trans('admin.updated_at'));

        return $form;
    }
}
