<?php
namespace MVC\Decorators;

class UsersDecorator extends DecoratorFactory
{
    public $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function title()
    {
       return 'Пользователи';
    }

    public function collection_render($call, $separator = '<br />')
    {
        return implode($separator, array_map($call, $this->users->collection));
    }

    public function body()
    {
        return $this->collection_render(
            function($item){
                $decorated_item = new UserDecorator($item);
                return $decorated_item->body();
            });
    }

    public function items()
    {
        return $this->collection_render(
            function($item){
                $decorated_item = new UserDecorator($item);
                return $decorated_item->items();
            }, '');
    }
}
