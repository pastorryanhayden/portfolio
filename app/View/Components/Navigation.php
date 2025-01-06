<?php
namespace App\View\Components;

use App\Models\CaseStudy;
use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navigation extends Component
{
    public $casestudies;
    public $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->casestudies = CaseStudy::where('is_published', 1)->get();
        $this->posts       = Post::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.navigation');
    }
}
