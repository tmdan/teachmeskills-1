<?php

namespace Panymari\Framework\Components;

/**
 * Класс для работы с сессией
 * Class Session
 */
class Session
{

    /**
     * Устанавливаем ячейку по имени $name c содержимым $value.
     * @param $name
     * @param $value
     * @return string
     */
    public static function set($name, $value): string
    {
        $value = is_array($value) ? serialize($value) : $value;
        $_SESSION[$name] = $value;
        return $_SESSION[$name];
    }

    /**
     * Получаем ячейку по имени $name из сессии.
     * @param $name
     * @return bool|mixed
     */
    public static function get($name)
    {
        return is_array(unserialize($_SESSION[$name])) ? unserialize($_SESSION[$name]) : $_SESSION[$name];
    }

    /**
     * Удаляем ячейку по имени $name из сессии.
     * @param $name
     * @return bool
     */
    public static function delete($name): bool
    {
        unset($_SESSION[$name]);
        return true;
    }

    /**
     * Удалем всю сессию целиком
     * @return bool
     */
    public static function destroy(): bool
    {
        return session_destroy();
    }

}