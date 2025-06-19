<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Solution;

class InstructionHandler
{
    private Expression $expression;


    public function handle(string $instruction): void
    {
        $left = null;
        $right = null;
        $direction = null;
        $action = null;
        $distance = null;
        $words = explode(' ', $instruction);
        $stack = [];
        for ($i = 0; $i < count($words); $i++) {
            $word = $words[$i];
            if ($word === 'and') {
                $left = array_pop($stack);
                $direction = new DirectionExpression($words[++$i]);
                $action = new ActionExpression($words[++$i]);
                $distance = new DistanceExpression($words[++$i]);
                $right = new SentenceExpression($direction, $action, $distance);
                array_push($stack, new AndExpression($left, $right));
            } else {
                $direction = new DirectionExpression($word);
                $action = new ActionExpression($words[++$i]);
                $distance = new DistanceExpression($words[++$i]);
                array_push($stack, new SentenceExpression($direction, $action, $distance));
            }
        }
        $this->expression = array_pop($stack);
    }

    public function output(): string
    {
        return $this->expression->interpret();
    }
}