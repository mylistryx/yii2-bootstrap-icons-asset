<?php

namespace yii\BootstrapIcons;

use yii\BootstrapIcons\items\Icon;

abstract class BootstrapIcon
{
    public static string $cssPrefix = 'bi';
    public static string $basePrefix = 'bi';

    /**
     * @param string $name
     * @param array $options
     * @return Icon
     */
    public static function i(string $name, array $options = []): Icon
    {
        return static::icon($name, $options);
    }

    /**
     * @param string $name
     * @param array $options
     * @return Icon
     */
    public static function icon(string $name, array $options = []): Icon
    {
        return new Icon(static::$cssPrefix, $name, $options);
    }
}