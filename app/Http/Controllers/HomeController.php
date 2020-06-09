<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class HomeController extends Controller
{



    public function home(){
    	/*$service= new Service();
    	$getServiceBySlug= $service->getServiceBySlug($slug);
    	$services=explode(",",$getServiceBySlug->services);
    	$separator=round(count($services)/2);

    	$servicesArray=array_chunk($services, $separator);

    	return view()->make('service')
    		->with("services",$servicesArray)
    		->with('service', $getServiceBySlug);*/
            $service= new Service();
            $getAllServices=$service->getAllServices();
            $servicesArray=array_chunk($getAllServices->toArray(), 5);
             $servicesitems=array_chunk($getAllServices->toArray(), 8);

            return view()->make('index')
                ->with("services_item",$servicesitems)
                ->with("services",$servicesArray);


    }
}
