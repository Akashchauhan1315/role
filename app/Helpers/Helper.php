<?php
namespace App\Helpers;

use App\Models\Category;

use App\Models\SubCatgeory;

class Helper{


	public static function getCategoryData(){


		$category=Category::all();

		foreach ($category as $key => $categoryInfo) {
			
			$categoryInfo->SubCatgeory=SubCatgeory::where('category_id',$categoryInfo->id)->get();

			$categoryInfo->SubCount=SubCatgeory::where('category_id',$categoryInfo->id)->count();

		}

		return $category;

	}


	public function MultipleuploadImage($image)
	{
	    
	    

	    $folder = '';

	    $name = time() . '_' . $image->getClientOriginalName();

	    $fileName = time() . '.' . $image->extension();

	    $name = !is_null($fileName) ? $fileName : Str::random(25);

	    $disk = 'productImage';

	    $file = $image->storeAs($folder, $name, $disk);

	    return $url = Storage::disk('productImage')->url($name);
	}



}

?>