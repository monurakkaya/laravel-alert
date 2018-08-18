<?php


if (!function_exists('success')) {
    function success($message, $title = null)
    {
        if ($title === null) {
            $title = trans('laravel-alert.success.default_title');
        }
        alert($message, $title, 'success', 'bg-success-400');
    }
}

if (!function_exists('error')) {
    function error($message, $title = null)
    {
        if ($title === null) {
            $title = trans('laravel-alert.error.default_title');
        }
        alert($message, $title, 'error', 'bg-danger-400');
    }
}

if (!function_exists('alert')) {
    function alert($message, $title, $type, $class)
    {
        session()->flash('alert', (object)[
            'type' => $type,
            'text' => $message,
            'title' => $title,
            'class' => $class
        ]);
    }
}

if (!function_exists('success_for_create')) {
    function success_for_create()
    {
        success(trans('laravel-alert.success.create'));
    }
}

if (!function_exists('success_for_update')) {
    function success_for_update()
    {
        success(trans('laravel-alert.success.update'));
    }
}

if (!function_exists('success_for_delete')) {
    function success_for_delete()
    {
        success(trans('laravel-alert.success.delete'));
    }

}
