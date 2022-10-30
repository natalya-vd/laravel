<?php

namespace Tests\Browser\Admin;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsTest extends DuskTestCase
{
    use RefreshDatabase;
    /**
     * A Dusk test createForm.
     *
     * @return void
     */
    public function testCreateNewsPrivate(): void
    {
        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id')
                ->type('title', 'Тест')
                ->type('description', 'Краткое описание Тест')
                ->type('text', 'Тестовая новость. Сама новость.')
                ->check('is_private')
                ->clickAndWaitForReload("@create-news")
                ->assertPathIsNot('/admin/news/create')
                ->assertSee('Зарегистрируйтесь для просмотра');
        });
    }

    public function testCreateNewsNotPrivate(): void
    {
        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id')
                ->type('title', 'Тест')
                ->type('description', 'Краткое описание Тест')
                ->type('text', 'Тестовая новость. Сама новость.')
                ->clickAndWaitForReload("@create-news")
                ->assertPathIsNot('/admin/news/create')
                ->assertSee('Тестовая новость. Сама новость.');
        });
    }

    public function testNotCreateForm(): void
    {
        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id')
                ->type('title', '')
                ->type('description', 'Краткое описание Тест')
                ->type('text', 'Тестовая новость. Сама новость.')
                ->clickAndWaitForReload("@create-news")
                ->assertPathIs('/admin/news/create')
                ->assertSee('Поле Заголовок обязательно для заполнения.');
        });
    }

    public function testUpdateForm(): void
    {

        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/news/1/edit')
                ->select('category_id')
                ->type('title', 'Тест')
                ->type('description', 'Обновление. Краткое описание Тест')
                ->type('text', 'Обновление. Тестовая новость. Сама новость.')
                ->clickAndWaitForReload("@update-news")
                ->assertPathIs('/admin/news/1/edit')
                ->assertSee(__('messages.admin.news.update.success'));
        });
    }

    public function testNotUpdateForm(): void
    {
        $this->browse(static function (Browser $browser) {
            $browser->visit('/admin/news/1/edit')
                ->select('category_id')
                ->type('title', '')
                ->type('description', 'Обновление. Краткое описание Тест')
                ->type('text', 'Обновление. Тестовая новость. Сама новость.')
                ->clickAndWaitForReload("@update-news")
                ->assertPathIs('/admin/news/1/edit')
                ->assertSee('Поле Заголовок обязательно для заполнения.');
        });
    }
}
