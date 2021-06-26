<?
namespace components;

class App
{
	
	protected $request= null;
	
	function __construct(){
		
		$this->request = new Request();

		
	}
	public function run(){
        $this->request->init();
	}
	
}


?>