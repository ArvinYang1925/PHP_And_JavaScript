<?php


class Pokemon
{
    public $hp = 100;
    public $attack = 30;

    public function getHp()
    {
        return $this->hp;
    }

    public function attacked($hurt)
    {
        $this->hp -= $hurt;
    }

    public function evolve()
    {
        $this->hp *= 2;
        $this->attack *= 2;
    }
}

$p = new Pokemon();
$p->attacked(10);
$p->attacked(10);
$p->evolve();
echo $p->getHp() . "\n\r";
echo $p->attack;
var_dump($p);
