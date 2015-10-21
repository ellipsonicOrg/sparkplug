<?php


    /**
     * @param $email_id
     * @return string
     */
    function gravatar_url($email_id)
    {

        return "http://gravatar.com/avatar/".md5($email_id);

    }


    /**
     * @param $classname
     * @return string
     */
    function get_module_class_name($classname)
    {
        $reflect = get_class_short_name($classname);

        $module = mutate_module_name($reflect);

        return $module;

    }

    /**
     * @param $reflect
     * @return string
     */
    function mutate_module_name($reflect)
    {
        return strtolower(str_replace("Controller", "", $reflect));
    }

    /**
     * @param $classname
     * @return ReflectionClass
     */
    function get_class_short_name($classname)
    {
        $reflect = new ReflectionClass($classname);
        $class_short_name = $reflect->getShortName();
        $reflect =  null;
        return $class_short_name;
    }