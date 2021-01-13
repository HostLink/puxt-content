<?php



return function ($context, $inject) {

    
    $inject("content", function ($path) {
        return new PUXT\Content($path);
    });
};
