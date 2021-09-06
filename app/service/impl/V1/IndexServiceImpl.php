<?php
namespace App\service\impl\V1;


use IndexServiceInter;


class IndexServiceImpl  implements IndexServiceInter
{
    
    public function index()
    {
        return view('layouts.master');
    }
    
}



?>