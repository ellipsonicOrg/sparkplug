<?php


    function gravatar_url($email_id) {

        return "http://gravatar.com/avatar/".md5($email_id);

    }