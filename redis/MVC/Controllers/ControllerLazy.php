<?php
namespace MVC\Controllers;

class ControllerLazy
{
    public $path;
    private $class;
    private $router;
    private $model;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function render()
    {
        $decorator = \MVC\Decorators\DecoratorFactory::create(
            $this->getRouter()->ext,
            $this->getClass(),
            $this->getModel());
        $view = \MVC\Views\ViewFactory::create(
            $this->getRouter()->ext,
            $this->getClass(),
            $decorator);
        return $view->render();
    }

    private function getClass() {
        if(empty($this->class)) {
            $class = get_class($this->getModel());
            $this->class = substr($class, strrpos($class, '\\') + 1);
        }
        return $this->class;
    }

    private function getRouter() {
        if(empty($this->router)) {
            $this->router = Router::parse($this->path);
        }
        return $this->router;
    }

    private function getModel() {
        if(empty($this->model)) {
            $class = 'MVC\\Models\\' . ucfirst($this->getRouter()->model);
            $this->model = new $class();
            if($this->getRouter()->id) {
                $this->model = $this->model->collection[$this->getRouter()->id];
            }
        }
        return $this->model;
    }
}
