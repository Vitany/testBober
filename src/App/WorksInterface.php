<?php

namespace Console\App;

interface WorksInterface
{
    const WRITE = 'writeCode';
    const TEST = 'testCode';
    const COMMUNICATION = 'communication';
    const DRAW = 'draw';
    const TASK = 'createTasks';

    const ALL_WORKS = [
        self::WRITE => '- code writing',
        self::TEST => '- code testing',
        self::COMMUNICATION => '- communication with manager',
        self::DRAW => '- draw',
        self::TASK => '- create tasks',
    ];

    const DEV_WORKS = [
        self::WRITE => self::ALL_WORKS[self::WRITE],
        self::TEST => self::ALL_WORKS[self::TEST],
        self::COMMUNICATION => self::ALL_WORKS[self::COMMUNICATION],
    ];

    const DES_WORKS = [
        self::DRAW => self::ALL_WORKS[self::DRAW],
        self::COMMUNICATION => self::ALL_WORKS[self::COMMUNICATION],
    ];

    const TEST_WORKS = [
        self::TEST => self::ALL_WORKS[self::TEST],
        self::COMMUNICATION => self::ALL_WORKS[self::COMMUNICATION],
        self::TASK => self::ALL_WORKS[self::TASK],
    ];

    const MAN_WORKS = [
        self::TASK => self::ALL_WORKS[self::TASK],
    ];

    public static function getWorks(User $user): array;

    public static function canWorkThis(User $user, string $rule): bool;
}