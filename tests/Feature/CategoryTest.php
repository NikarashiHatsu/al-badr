<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    private $category;

    protected function setUp(): void
    {
        parent::setUp();

        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $user = User::factory()->admin()->create();
        $this->actingAs($user);

        // Create a dummy category
        $this->category = Category::factory()->create();
    }

    public function test_index_page()
    {
        $response = $this->get(route('dashboard.category.index'));
        $response->assertStatus(200);
        $response->viewData('categories');
        $response->assertSeeText('Daftar kategori');
    }

    public function test_show_page()
    {
        $response = $this->get(route('dashboard.category.show', $this->category));
        $response->assertStatus(200);
        $response->viewData('category');
        $response->assertSeeText('Detail kategori');
    }

    public function test_create_page()
    {
        $response = $this->get(route('dashboard.category.create'));
        $response->assertStatus(200);
        $response->assertSeeText('Tambah kategori');
    }

    public function test_edit_page()
    {
        $response = $this->get(route('dashboard.category.edit', $this->category));
        $response->assertStatus(200);
        $response->assertSeeText('Edit kategori');
        $response->viewData('category');
    }

    public function test_store_data_from_create_page()
    {
        $this->get(route('dashboard.category.create'));
        $category = Category::factory()->make();

        $response = $this->post(route('dashboard.category.store', [
            'name' => $category->name,
        ]));
        $response->assertRedirect();
        $response->assertSessionHas('success');
    }

    public function test_update_data_from_edit_page()
    {
        $this->get(route('dashboard.category.edit', $this->category));
        $category = Category::factory()->make();

        $response = $this->put(route('dashboard.category.update', $this->category), [
            'name' => $category->name,
        ]);
        $response->assertRedirect();
        $response->assertSessionHas('success');
    }

    public function test_delete_data_from_index_page()
    {
        $this->get(route('dashboard.category.index'));

        $response = $this->delete(route('dashboard.category.destroy', $this->category));
        $response->assertRedirect();
        $response->assertSessionHas('success');
    }
}
