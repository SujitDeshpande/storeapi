<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Store as Store;

class Controller extends BaseController
{
    
    public function getStoreByStoreid($id)
    {
    	return  Store::getStoreDetailsByStoreid($id);
    }
    public function getStoreByBannerid($id)
    {
    	return Store::getStoreDetailsByBannerid($id);
    }
    public function getStoreByBannername($name)
    {
    	return Store::getStoreDetailsByBannername($name);
    }
    public function getStoreByCity($city)
    {
    	return Store::getStoreDetailsByCity($city);
    }
    public function getStoreByProvince($province)
    {
    	return Store::getStoreDetailsByProvince($province);
    }
    public function getStoreByDistrictid($id)
    {
    	return Store::getStoreDetailsByDistrictid($id);
    }
}

