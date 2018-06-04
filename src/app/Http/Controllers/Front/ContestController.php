<?php
/**
 * Created by PhpStorm.
 * User: lucia
 * Date: 02-06-2018
 * Time: 11:55 AM
 */

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
class ContestController extends  Controller
{
    public function deliverContest($id) {
        $registered = 1;
        if (isset($_GET['registered'])) {
            $registered = 2;
        }
        return view('contests.deliver_contest', ['registered' => $registered]);
    }
}