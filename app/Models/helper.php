<?php
function get_content($fkey){
        $content=   \App\WebsiteContent::where('field_key',$fkey)->first()->field_value;
        return $content;
    } 
function can_edit(){
    if(Auth::check()){
        if(Auth::user()->roles){
            if(Auth::user()->roles->first()->name=='Admin'){
                return true;
            }
        }
    }
    return false;
} 