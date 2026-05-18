<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
    public function __construct(
        protected string $view,
        protected array $params = [])
    {
        
    }

    protected function renderBase() : string
    {
        $basePath = VIEW_PATH . '/base.php';

        ob_start();

        include $basePath;

        return (string) ob_get_clean();

    }

    protected function replaceContent(string $base,string $content, string $placeholder = '{{custom_view}}') : string
    {
        return str_replace($placeholder, $content, $base);
    }

    public function render(bool $withLayout = false) : string
    {
        $base = $this->renderBase();
        
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if(! file_exists($viewPath)){
            throw new ViewNotFoundException();
        }

        //extarct(this->params);

        //Secuity problems
        foreach($this->params as $key => $value){
            $$key = $value;
        }

        ob_start();
        
        include $viewPath;

        if(! $withLayout){
            return (string) ob_get_clean();
        }

        return $this->replaceContent($base, (string) ob_get_clean());

    }

    public static function make(string $view, array $params = []) : static
    {
        return new static($view, $params);
    }

    public function __toString()
    {
        return $this->render();
    }
}