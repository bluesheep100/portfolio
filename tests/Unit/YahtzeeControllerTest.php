<?php

namespace Tests\Unit;

use Tests\TestCase;

class YahtzeeControllerTest extends TestCase
{
    /** @test */
    public function a_yahtzee_session_can_be_created()
    {
        $this->assertNull(session('yahtzee'));

        $response = $this->post(route('yahtzee_create'));

        $response->assertStatus(302);
        $response->assertRedirect(route('yahtzee'));
        $response->assertSessionHas('yahtzee');
    }
}
