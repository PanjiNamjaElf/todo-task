<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SectionController extends TestCase
{
    /** @test */
    public function can_view_create_form()
    {
        $response = $this->get(route('section.create'));

        $response->assertStatus(200);
    }

    /** @test */
    public function can_store_section()
    {
        $response = $this->post(route('section.store'), [
            'name' => 'Example Section',
            'description' => 'Section Description'
        ]);

        $response->assertRedirect();
    }
}
