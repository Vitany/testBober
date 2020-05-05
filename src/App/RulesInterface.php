<?php

namespace Console\App;

interface RulesInterface
{
    const WRITE = 'writeCode';
    const TEST = 'testCode';
    const COMMUNICATION = 'communication';
    const DRAW = 'draw';
    const TASK = 'createTasks';

    const RULES = [
        self::WRITE => '- code writing',
        self::TEST => '- code testing',
        self::COMMUNICATION => '- communication with manager',
        self::DRAW => '- draw',
        self::TASK => '- create tasks',
    ];

    const DEV_RULES = [
        self::WRITE => self::RULES[self::WRITE],
        self::TEST => self::RULES[self::TEST],
        self::COMMUNICATION => self::RULES[self::COMMUNICATION],
    ];

    const DES_RULES = [
        self::DRAW => self::RULES[self::DRAW],
        self::COMMUNICATION => self::RULES[self::COMMUNICATION],
    ];

    const TEST_RULES = [
        self::TEST => self::RULES[self::TEST],
        self::COMMUNICATION => self::RULES[self::COMMUNICATION],
        self::TASK => self::RULES[self::TASK],
    ];

    const MAN_RULES = [
        self::TASK => self::RULES[self::TASK],
    ];

    public static function getRule(string $user): array;

    public static function canRule(string $user, string $rule): bool;
}