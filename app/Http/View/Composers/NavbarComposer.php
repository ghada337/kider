<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Contact;

class NavbarComposer
{
    public function compose(View $view){
        $unread = Contact::where('flag', 0)->count();
        //session
        $view->with("unread", $unread);
    }
}