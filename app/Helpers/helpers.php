<?php
    use Illuminate\Support\Str;

define("PAGELIST","liste");
define("PAGECREATE","create");
define("PAGEEDIT","edit");
define("DEFAULTPASSWORD","password");


function userlastName(){
    return auth()->user()->name;
}

function userfirstName(){
    return auth()->user()->firstName;
}

function userfullName(){
    return userfirstName().' '. userlastName();
}

function userImage(){
    return auth()->user()->image;
}


function addClass($route, $class){
    $routeActuel= request()->route()->getName();
    if( Str::contains($routeActuel, $route)){
        return $class;
    }
    return "";    
}
function openMenu($route){
    if( request()->route()->getName()=== $route ){
        return 'menu-open active';
    }
    return '';
}
function active($route){
    if( request()->route()->getName()=== $route ){
        return 'active';
    }
    return '';
}