<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use App\View\Components\Form\DateInput;
use App\View\Components\Form\FileInput;
use App\View\Components\Form\TextInput;
use Illuminate\Support\ServiceProvider;
use App\View\Components\Form\RadioInput;
use App\View\Components\Backend\Icon\Add;
use App\View\Components\Form\SelectInput;
use App\View\Components\Backend\Icon\Back;
use App\View\Components\Backend\Icon\Edit;
use App\View\Components\Backend\Icon\Home;
use App\View\Components\Backend\Icon\Save;
use App\View\Components\Form\CheckBoxInput;
use App\View\Components\Form\TextAreaInput;
use App\View\Components\Backend\Icon\Delete;
use App\View\Components\Backend\Icon\Preview;

class ComponentProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        //Form
        Blade::component('input', TextInput::class);
        Blade::component('date', DateInput::class);
        Blade::component('file', FileInput::class);
        Blade::component('radio',RadioInput::class);
        Blade::component('checkbox', CheckBoxInput::class);
        Blade::component('select', SelectInput::class);
        Blade::component('textarea', TextAreaInput::class);

        //Icon
        Blade::component('add', Add::class);
        Blade::component('save', Save::class);
        Blade::component('delete', Delete::class);
        Blade::component('home', Home::class);
        Blade::component('back', Back::class);
        Blade::component('preview', Preview::class);
        Blade::component('edit', Edit::class);



    }
}
