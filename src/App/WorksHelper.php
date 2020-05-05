<?php

namespace Console\App;

class WorksHelper implements WorksInterface
{
    /**
     * @param User $user
     * @return array
     */
    public static function getWorks(User $user): array
    {
        switch ($user->work) {
            case 'developer':
                return self::DEV_WORKS;
            case 'designer':
                return self::DES_WORKS;
            case 'tester':
                return self::TEST_WORKS;
            case 'manager':
                return self::MAN_WORKS;

            default:
                return ['Profession not found'];
        }
    }

    /**
     * @param User $user
     * @param string $rule
     * @return bool
     */
    public static function canWorkThis(User $user, string $rule): bool
    {
        switch ($user->work) {
            case 'developer':
                return array_key_exists($rule, self::DEV_WORKS);
            case 'designer':
                return array_key_exists($rule, self::DES_WORKS);
            case 'tester':
                return array_key_exists($rule, self::TEST_WORKS);
            case 'manager':
                return array_key_exists($rule,  self::MAN_WORKS);

            default:
                return false;
        }
    }
}