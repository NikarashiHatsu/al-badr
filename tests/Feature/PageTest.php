<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_index_page()
    {
        $response = $this->get(route('index'));

        $response->assertStatus(200);
    }

    public function test_sejarah_page()
    {
        $response = $this->get(route('sejarah'));

        $response->assertStatus(200);
    }

    public function test_visi_dan_misi_page()
    {
        $response = $this->get(route('visi_dan_misi'));

        $response->assertStatus(200);
    }

    public function test_prestasi_page()
    {
        $response = $this->get(route('prestasi'));

        $response->assertStatus(200);
    }

    public function test_kontak_page()
    {
        $response = $this->get(route('kontak'));

        $response->assertStatus(200);
    }

    public function test_blog_page()
    {
        $response = $this->get(route('blog'));

        $response->assertStatus(200);
    }
}
