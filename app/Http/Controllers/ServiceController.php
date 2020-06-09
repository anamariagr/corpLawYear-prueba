<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    //

    public function showService($slug){
    	$service= new Service();
    	$getServiceBySlug= $service->getServiceBySlug($slug);
    	$services=explode(",",$getServiceBySlug->services);
    	$separator=round(count($services)/2);

    	$servicesArray=array_chunk($services, $separator);

    	return view()->make('service')
    		->with("services",$servicesArray)
    		->with('service', $getServiceBySlug);
    }
}
