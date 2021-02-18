<?php

namespace Tests\Unit;

use App\Yahtzee;
use Mockery;
use Tests\TestCase;

class YahtzeeTest extends TestCase
{
    /** @test */
    public function constants_reference_constant_score_values()
    {
        $this->assertEquals(25, Yahtzee::BONUS);
        $this->assertEquals(25, Yahtzee::FULL_HOUSE);
        $this->assertEquals(30, Yahtzee::SMALL_STRAIGHT);
        $this->assertEquals(40, Yahtzee::LARGE_STRAIGHT);
        $this->assertEquals(50, Yahtzee::YAHTZEE);
    }

    /** @test */
    public function adds_players_on_creation()
    {
        $spy = Mockery::spy('App\Yahtzee', [1]);

        $spy->shouldHaveReceived('addPlayer');
        $this->assertEquals(1, $spy->playerCount);
    }

    /** @test */
    public function can_count_grand_total()
    {
        $yahtzee = new Yahtzee(1);

        $yahtzee->save([
            [
                'upper' => [
                    'ones' => 4,
                    'twos' => 2,
                ],
            ],
        ]);

        $this->assertEquals(6, $yahtzee->getGrandTotal(0));
    }

    /** @test */
    public function can_save_current_point_scores()
    {
        $yahtzee = new Yahtzee(1);

        $yahtzee->save([['upper' => ['twos' => 4]]]);

        $this->assertEquals(4, $yahtzee->getGrandTotal(0));
    }
}
