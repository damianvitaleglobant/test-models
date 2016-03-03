<?php

namespace Globant\SharedModels;
 
use fsadmin\Http\Controllers\Controller;
use Globant\SharedModels\User;
use Carbon\Carbon;
 
class SharedModelsController extends Controller
{
 
    public function index() {
        $user = new User(array('name' => 'Damian'));
        
        echo '<pre>';
        print_r($user);
        echo '</pre>';
        
    }
 
}
