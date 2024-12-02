<?php
namespace yii\BootstrapIcons\items;

use yii\BootstrapIcons\BootstrapIcon;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Icon
{
    /**
     * @param string $cssPrefix
     * @param string $name
     * @param array $options
     */
    public function __construct(string $cssPrefix, string $name, private array $options = [])
    {
        Html::addCssClass($this->options, $cssPrefix);

        if (!empty($name)) {
            Html::addCssClass($this->options, BootstrapIcon::$basePrefix . '-' . $name);
        }
    }

    /**
     * @param string $class
     * @param bool $condition
     * @param string|null $throw
     * @return $this
     */
    public function addCssClass(string $class, bool $condition = true, ?string $throw = null): static
    {
        Html::addCssClass($this->options, $class);

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $options = $this->options;
        $tag = ArrayHelper::remove($options, 'tag', 'i');

        return Html::tag($tag, null, $options);
    }


    /**
     * @param array|string $style
     * @param bool $overwrite
     * @return $this
     */
    public function addCssStyle(array|string $style, bool $overwrite = true): static
    {
        Html::addCssStyle($this->options, $style, $overwrite);

        return $this;
    }

}