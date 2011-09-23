<?php

interface DiceGameStrategy
{
    /**
     * Возвращает результат игры.
     * @param $total сумма очков, выпавших на кубиках
     * @return string winner, если выигрыш, looser, если проигрыш, push, если ничья
     */
    public function getResult($total);
}
