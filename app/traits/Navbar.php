<?php

namespace App\Traits;
use App\Models\Contact;
use DB;

Trait Navbar {
    public function UnreadMessagesCount(){
        $sql = "SELECT count(*) FROM `contacts` WHERE `flag` = 0";
        $unread = DB::select($sql)->first();
        // $unread = Contact::where('flag', 0)->count();
        return $unread;
    }
}