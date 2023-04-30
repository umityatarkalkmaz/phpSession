<?php
namespace UmitYatarkalkmaz;
class Session
{
    public static function set($key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        return $_SESSION[$key] ?? null;
    }

    public static function remove($key): void
    {
        unset($_SESSION[$key]);
    }

    public static function start($sessionName = false): void
    {
        if ($sessionName) {
            session_name($sessionName);
        }
        session_start();
    }

    public static function setTimeout($minutes): void
    {
        $lifetime = $minutes * 60;
        session_set_cookie_params($lifetime);
        ini_set('session.gc_maxlifetime', $lifetime);
    }

    public static function regenerate(): void
    {
        session_regenerate_id(true);
    }

    public static function destroy(): void
    {
        session_unset();
        session_destroy();
    }
}
