<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends BackEndController
{
    public function __construct(Order $model){
        parent::__construct($model);
    }
    public function index(){
        // $rows = Category::get();
        $rows = Order::orderBy('o_id','desc')->paginate(5);
        // dd($rows);
        $pageTitle = strtoupper($this->getNameFromModel()).' CONTROLLER';   
        $pageDes = 'Here you can add / edit / delete '.$this->getNameFromModel();
        $routename = $this->plureModelName();
        // dd($this->getNameFromModel()); 
        return view('dashboard.'.$this->plureModelName().'.index', compact(
            'rows',
            'pageTitle',
            'pageDes',
            'routename'
        ));
    }

}
