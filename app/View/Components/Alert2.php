<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type)
    {
        switch ($type) {
            case 'info':
              $class = "text-blue-800 bg-blue-50";
              break;
            
              case 'danger':
              $class = "text-red-800 bg-red-50";
              break;
      
              case 'success':
              $class = "text-green-800 bg-green-50";
              break;
      
              case 'warning':
              $class = "text-yellow-800 bg-yellow-50";
              break;
      
              case 'dark':
              $class = "text-gray-800 bg-gray-50";
              break;
      
            default:
              $class = "text-blue-800 bg-blue-50";
              break;
          }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
