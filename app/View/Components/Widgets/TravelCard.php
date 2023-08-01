<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;

class TravelCard extends Component
{

    protected $image;
    protected $country;
    protected $name;
    protected $continent;
    protected $mode;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $country, $name, $continent, $mode)
    {
        $this->image = $image;
        $this->country = $country;
        $this->name = $name;
        $this->continent = $continent;
        $this->mode = $mode;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.travel-card')->with([
            'image'=>$this->image,
            'country'=>$this->country,
            'name'=>$this->name,
            'continent'=>$this->continent,
            'mode'=>$this->mode
        ]);
    }
}
