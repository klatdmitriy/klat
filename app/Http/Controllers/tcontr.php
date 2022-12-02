<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request; 
class tcontr extends Controller 
{
	public function show1() 
	{
	return 'TestController';
	}	

	public function showOne($pages) 
	{ 
		$pages = [ 
			1 => 'страница 1',
		 	2 => 'страница 2',
		 	3 => 'страница 3',
		 	4 => 'страница 4',
		    5 => 'страница 5',
		];
	} 

	public function show($param) 	
	{
		return $param;
	}
	public function show2($param1,$param2) 
	{ 
	 return $param1 . ' ' . $param2; 	
	} 

	public function sum($num1,$num2) 	
	{
		return $num1 . ' ' . $num2; 	
	}

	public function show5() 
	{ 
	return view('test', ['var1' => '1', 'var2' => '2']); 
	}

	public function show8() 
	{ 
	return view('test.test', ['name' => 'Дмитрий', 'surname' => 'Клат']); 
	}
	
	public function show9() 
	{ 
	return view('testt', ['name1' => 'Дмитрий', 'age' => '12', 'salary' => '80000']); 
	}

	public function show10() 
	{ 
		return view('test.nedeli1', ['day' => '7']); 
	}

	public function show11() 
	{ 
		return view('test.nedeli1', $arr = [ 
			1 => 'страница 1',
		 	2 => 'страница 2',
		 	3 => 'страница 3',
		 	4 => 'страница 4',
		    5 => 'страница 5',]); 
	}
	public function show12() 
	{ 
		return view('test.verstka', ['day' => 'Fromis']); 
	}

	public function form(Request $request)
		{
			// Если форма была отправлена и есть поле text:
			if ($request->has('text')) {
				var_dump($request->input('text'));
			}
			
			return view('test.form');
		}

}
