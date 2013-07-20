<?php
function generateAdminMenus(){
	//Main
	Menu::handler('main', array('class' => 'nav'));
	if (Auth::check()){
		$user = Auth::user();
		Menu::handler('main')->add('/', '<i class="icon-home"></i> Tasks');
		Menu::handler('main')->add('task', '<i class="icon-plus"></i> New Task');
		Menu::handler('main')->add('users', '<i class="icon-group"></i> Manage Users');
		Menu::handler('main')->add('profile', '<i class="icon-user"></i> My Profile');
		Menu::handler('main')->add('logout', '<i class="icon-lock"></i> Logout');
	}else{
		Menu::handler('main')->add('<i class="icon-key"></i> login', 'Login');
		Menu::handler('main')->add('<i class="icon-question-sign"></i> forgot-password', 'Forgot Password');
	}
}
