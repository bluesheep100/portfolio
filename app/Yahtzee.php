<?php

namespace App;

class Yahtzee
{
    public const BONUS = 25;
    public const FULL_HOUSE = 25;
    public const SMALL_STRAIGHT = 30;
    public const LARGE_STRAIGHT = 40;
    public const YAHTZEE = 50;
    public const RULES = [
        ''
    ];

    public $playerCount;

    protected $players = [];

    public function __construct(int $playerCount)
    {
        foreach (range(1, $playerCount) as $i)
            $this->addPlayer();

        $this->playerCount = sizeof($this->players);
    }

    protected function addPlayer(): void
    {
        $this->players[] = [
            'upper' => [
                'ones' => 0,
                'twos' => 0,
                'threes' => 0,
                'fours' => 0,
                'fives' => 0,
                'sixes' => 0,
            ],
            'lower' => [
                'three_kind' => 0,
                'four_kind' => 0,
                'full_house' => 0,
                'small_straight' => 0,
                'large_straight' => 0,
                'yahtzee' => 0,
                'chance' => 0,
            ],
        ];
    }

    public function save(array $data, int $index): void
    {
        $this->players[$index] = array_replace_recursive($this->players[$index], $data);
    }

    public function getGrandTotal(int $index): int
    {
        $total = 0;
        array_walk_recursive($this->players[$index], function ($item) use (&$total) {
            $total += $item;
        });

        return $total;
    }
}
