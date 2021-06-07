<?
namespace components;

class Request implements ComponentInterface
{
	
	
	public controller = "news";
	public $action = "index";
	public $namSpaceController = "\controllers";
	
	public function init(){
		
		$uri = $_SERVER['REQUEST_URI'];
		
		$path = explode("/",$uri);
		
		if ( count( $path ) == 2 ){
			
			$this->controller = $path[1];
			$this->action = $path[2];
			
			
		}elseif ( count( $path ) == 2 )}{
			$this->controller = $path[1];
		
			
			
		}
		
		
		$this->callController();
		
		
			
		
	}
	
	
	protected function callController(){
		
		
		
		
	}


}


?>