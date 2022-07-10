<?php namespace app\controllers;
class OtherCtrl{
    
    	public function action_otherShow(){
		getMessages()->addInfo('Witaj na stronie chronionej');
		$this->generateView();
	}
        
    	public function generateView(){
	getSmarty()->assign('page_title','Strona chroniona');
		getSmarty()->assign('page_description','Ta strona może zostać wyświetlona tylko przez administratora');
		getSmarty()->assign('page_header','Użytkownik \'user\' nie może wyświetlić tej strony');

		
		getSmarty()->display('OtherView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
    
    
}

