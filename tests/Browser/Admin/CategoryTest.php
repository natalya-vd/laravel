<?php

namespace Tests\Browser\Admin;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends DuskTestCase
{
    use RefreshDatabase;
    /**
     * A Dusk test createForm.
     *
     * @return void
     */
    public function testCreateForm(): void
    {

        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/category/create')
                ->type('title', 'Тест')
                ->clickAndWaitForReload("@create-category")
                ->assertRouteIs('admin.category.list')
                ->assertSee(__('messages.admin.category.create.success'));
        });
    }

    public function testNotCreateForm(): void
    {
        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/category/create')
                ->type('title', '')
                ->clickAndWaitForReload("@create-category")
                ->assertPathIs('/admin/category/create')
                ->assertSee('Поле Категория обязательно для заполнения.');
        });
    }

    public function testUpdateForm(): void
    {

        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/category/1/edit')
                ->type('title', 'Тест')
                ->clickAndWaitForReload("@update-category")
                ->assertPathIs('/admin/category/1/edit')
                ->assertSee(__('messages.admin.category.update.success'));
        });
    }

    public function testNotUpdateForm(): void
    {
        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/category/1/edit')
                ->type('title', '')
                ->clickAndWaitForReload("@update-category")
                ->assertPathIs('/admin/category/1/edit')
                ->assertSee('Поле Категория обязательно для заполнения.');
        });
    }
}
