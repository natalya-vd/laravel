<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsTest extends TestCase
{
    public function test_the_news_list_returns_a_successful_response()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    public function test_a_news_list_view_can_be_rendered()
    {
        $view = $this->view('pages.news.index', ['news' => [
            865 => [
                'id' => 865,
                'title' => 'Test title',
                'description' => 'Description',
                'text' => 'text',
                'isPrivate' => false,
                "category_id" => 563,
                'slug' => 'test-category'
            ]
        ]]);

        $view->assertSee('Test title');
    }

    public function test_a_news_one_view_can_be_rendered()
    {
        $view = $this->view('pages.news.one', ['news' => [
            'id' => 865,
            'title' => 'Test title',
            'description' => 'Description',
            'text' => 'text',
            'isPrivate' => false,
            "category_id" => 563,
            'slug' => 'test-category'
        ]]);

        $view->assertSee('Test title');
        $view->assertSee('text');
    }

    public function test_a_news_one_view_private()
    {
        $view = $this->view('pages.news.one', ['news' => [
            'id' => 865,
            'title' => 'Test title',
            'description' => 'Description',
            'text' => 'text',
            'isPrivate' => true,
            "category_id" => 563,
            'slug' => 'test-category'
        ]]);

        $view->assertDontSee('Test title');
        $view->assertDontSee('text');
        $view->assertSee('Зарегистрируйтесь для просмотра');
    }

    public function test_a_news_one_view_empty_news()
    {
        $view = $this->view('pages.news.one', ['news' => []]);

        $view->assertSee('По данному запросу ничего не найдено. Попробуйте другой ID');
    }
}
