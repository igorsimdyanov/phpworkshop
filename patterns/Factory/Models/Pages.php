<?php
namespace Factory\Models;

class Pages extends Collection
{
    public $pages;

    public function __construct($pages = null)
    {
        if(is_null($pages))
        {
            $pages = [
                new Page(
                     'Первая статья',
                     'Содержимое первой статьи'),
                new Page(
                     'Вторая статья',
                     'Содержимое второй статьи')
            ];
        }
        parent::__construct($pages);
    }

    public function render()
    {
        return implode('', parent::render());
    }
}
