<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageControllerTest extends TestCase
{
    /** @test */
    public function guest_can_see_yahtzee_page()
    {
        $response = $this->get(route('yahtzee'));
        $response->assertStatus(200);
    }
}
