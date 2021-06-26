<?
namespace components;

class Request implements ComponentInterface
{
	
	
	public $controller = "news";
	public $action = "index";
	public $namSpaceController = "\controllers";
	
	public function init(){
		
		$uri = $_SERVER['REQUEST_URI'];
		
		$path = explode("/",$uri);
		
		if ( count( $path ) == 3 ){
			
			$this->controller = $path[1];
			$this->action = $path[2];

		}elseif ( count( $path ) == 2 ){
			$this->controller = $path[1];

		}
		
		
		$this->callController();
		
		
			
		
	}
	
	
	protected function callController(){
		$classController = $this->namSpaceController.'\\'.ucfirst($this->controller).'Controller';
		$action = 'action'.ucwords($this->action);

		if (class_exists($classController)){
		    $controllerInstance = new $classController;

		    if (method_exists($controllerInstance,$action)){

		        call_user_func_array([$classController,$action],[]);

            }else{
		        throw new \Exception('метода не существует');

            }

        }
		
		
		
	}


}


?>