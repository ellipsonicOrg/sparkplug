<?php


namespace app\Http\ViewComposers;

use App\Module;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\URL;

class SidebarComposer
{

    public function __construct(Gate $gate, Module $moduleModel){

        $this->gate     = $gate;
        $this->modules  = [];
        $this->moduleModel = $moduleModel;
    }


    /**
     * @param View $view
     */
    public function compose(View $view)
    {

        $availableModules = $this->moduleModel->listAvailableModules();
        foreach($availableModules as $availableModule) {

            $name = $availableModule->name;

            if($this->gate->allows($name))
            {
                $this->modules = "<li><a href='".URL::route($availableModule->route)."'><i class='".$availableModule->icon."'></i><span>$availableModule->label</span></a></li>";

            } else {

                $this->modules = null;
            }

            $view->with('modules',$this->modules);
        }



    }




}