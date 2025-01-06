<?php
namespace App\View\Components;

use App\Models\CaseStudy;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CaseStudies extends Component
{
    public $casestudies;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->casestudies = CaseStudy::where('is_published', 1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.case-studies');
    }
}
