<?php

namespace Tests\Unit;

use App\Yahtzee;
use Tests\TestCase;

class YahtzeeControllerTest extends TestCase
{
    /** @test */
    public function a_yahtzee_session_can_be_created()
    {
        $this->assertNull(session('yahtzee'));

        $response = $this->post(route('yahtzee_create'), ['player_count' => 1]);

        $response->assertStatus(302);
        $response->assertRedirect(route('yahtzee'));
        $response->assertSessionHas('yahtzee');
    }

    /** @test */
    public function a_yahtzee_session_cannot_be_created_with_an_invalid_player_count()
    {
        $this->assertNull(session('yahtzee'));

        $response1 = $this->post(route('yahtzee_create'), ['player_count' => -1]);
        $response2 = $this->post(route('yahtzee_create'), ['player_count' => 1000]);

        $response1->assertStatus(302);
        $response2->assertStatus(302);
        $this->assertEmpty(session('yahtzee'));
    }

    /** @test */
    public function a_yahtzee_session_can_be_deleted()
    {
        session(['yahtzee' => new Yahtzee(1)]);

        $response = $this->delete(route('yahtzee_delete'));

        $response->assertStatus(302);
        $response->assertRedirect(route('yahtzee'));
        $this->assertEmpty(session('yahtzee'));
    }
}
