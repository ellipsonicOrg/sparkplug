<?php


namespace app\Http\ViewComposers;

use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Contracts\View\View;

class SidebarComposer
{

    public function __construct(Gate $gate){

        $this->gate     = $gate;
        $this->modules  = [];
    }


    /**
     * @param View $view
     */
    public function compose(View $view)
    {

        // Loop the gate variables and get the accessible module names and links
        if($this->gate->allows('access_sparkplug_backend'))
        {
            $this->modules = "<li><a href=\"/superadmin/ecosystem\"><i class='fa fa-globe'></i><span>Sparkplug core</span></a></li>";
        }

        $view->with('modules',$this->modules);

    }




}