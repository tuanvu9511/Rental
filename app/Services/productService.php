<?php 
namespace App\Services;

use App\Services\Resultbase;
use App\Services\Interfaces\productServiceInterface;
use ExceptionHandler;
use ModelNotFoundException;
use App\Repositories\Interfaces\ProductRepositoryInterface;
class productService implements productServiceInterface
 {
 	protected $productRepository;
 	function __construct(ProductRepositoryInterface $productRepository){
 		$this->productRepository=$productRepository;
 	}
	public function save(array $data) : Resultbase
	{
		try 
		{
		// "select_productcategory": "1",
		// "select_productbrand": "1",
		// "select_productspecification": "1",
		// "serialnumber": "123",
		// "information": null,
		// "stockable": null
			$nameproduct = 'C'.$data['select_productcategory'].'B'.$data['select_productbrand'].'S'.$data['select_productspecification'];
	        return new ResultBase(true, $data, '', 200);
      } 
      catch (Exception $ex) 
      {
        return new ResultBase(false, [], 'Processing error. Contact IT!', 500);
    }
	}
	public function fetchAll() : ResultBase
	{
		try
		{
			$data = $this->productRepository->getAll();
			return new ResultBase(true,$data,'Get all complete',200);
		}
		catch(ExceptionHandler $ex)
		{
			return new ResultBase(false, [] ,'Processing error. Please try again!',500);
		}
	}
}