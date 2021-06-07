<?
namespace controllers;

class News{
	
	public function actionGet(){
		
		$mUser = new User;
		
		$mUser->getUsers();
		
	
	}
	
	

}

?>