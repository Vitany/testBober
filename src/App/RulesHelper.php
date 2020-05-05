<?php

namespace Console\App;

class RulesHelper implements RulesInterface
{
    public static function getRule(string $user): array
    {
        switch ($user) {
            case 'developer':
                return self::DEV_RULES;
            case 'designer':
                return self::DES_RULES;
            case 'tester':
                return self::TEST_RULES;
            case 'manager':
                return self::MAN_RULES;

            default:
                return ['Profession not found'];
        }
    }

    public static function canRule(string $user, string $rule): bool
    {
        switch ($user) {
            case 'developer':
                return array_key_exists($rule, self::DEV_RULES);
            case 'designer':
                return array_key_exists($rule, self::DES_RULES);
            case 'tester':
                return array_key_exists($rule, self::TEST_RULES);
            case 'manager':
                return array_key_exists($rule,  self::MAN_RULES);

            default:
                return false;
        }
    }
}