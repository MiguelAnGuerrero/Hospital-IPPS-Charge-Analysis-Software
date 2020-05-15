<?php
//CONTROLLER
use \Debug;
use \Model\hospitalmodel;
class Controller_Hospital extends Controller
{

	public function action_index()
	{
        //default css
        $view = View::forge("hospital/template.php", array(
        "title" => "FAME Inc.",
        "contents" => View::forge("hospital/index.php")
        
        ));
        return Response::forge($view);
      
		//return Response::forge(view::forge('eastwest/index'));
	}
	public function action_about()
	{
       $view = View::forge("hospital/template.php", array(
        "title" => "About Us",
        "contents" => View::forge("hospital/about.php")
        
        ));
        return Response::forge($view);
	}
		public function action_hospitallist($start = 0)
	{
		$hospital_data = hospitalmodel::get_hospitals($start, 20);
        //$hospital_data = hospitalmodel::get_hospitals(0,196326);
        $view = View::forge("hospital/template.php", array(
			"title" => "the Hospital List",
			"contents" => View::forge("hospital/hospitallist.php", array(
			"hospital_data" => $hospital_data,
			"start" => $start,
			)),
        ));
        return Response::forge($view);
       // $this->hospitallist->hospital_data = hospitalmodel::get_hospitals(0,10);
       // Debug::dump($hospital_data);
      
		//return Response::forge(view::forge('eastwest/index'));
	}
	
		public function action_drglist($start = 0)
	{
		$drg_data = hospitalmodel::get_drgs($start, 20);
		//$drg_data = hospitalmodel::get_drgs(0,196326);
		//Debug::dump($drg_data);
        $view = View::forge("hospital/template.php", array(
			"title" => "DRG List",
			"contents" => View::forge("hospital/drglist.php", array(
			"drg_data" => $drg_data,
			"start" => $start,
			)),
        ));
        return Response::forge($view);
	}
	
		public function action_hospitaldetails($start = 0)
	{
		$mpn_return = hospitalmodel::get_mpn($start, 20);
        $view = View::forge("hospital/template.php", array(
        "title" => "Hospital Details",
        "contents" => View::forge("hospital/hospitaldetails.php", array(
        "mpn_return" => $mpn_return,
		"start" => $start,
            )),
        ));
        return Response::forge($view);
	}
	
		public function action_drgdetails($start = 0)
	{
        $drg = hospitalmodel::get_drgs($start,20);
		//$drg = hospitalmodel::get_drgs(0,196326);
        $view = View::forge("hospital/template.php", array(
        "title" => "DRG Details",
        "contents" => View::forge("hospital/drgdetails.php", array(
        "drg" => $drg,
		"start" => $start,
        )),
        ));
        return Response::forge($view);
	}
	public function get_login(){
        $user = hospitalmodel::get_user();
        $view = View::forge("hospital/template.php", array(
        "title" => "Login",
        "contents" => View::forge("hospital/login.php", array(
        'failed' => false, 
        "user" => $user
        ))
        ));
        return Response::forge($view);
	}
	
	public function post_login(){
	
	$validation = '';
	if(isset($_POST['username']) && isset($_POST['password'])){
	$validation = Controller_Hospital::return_login_validation($_POST['username'], $_POST['password']);
	$user = $validation;
	}
	if( $validation === 'ct310' || $validation === 'admin'){
        $_SESSION['username']=Input::post('username');
        $view = View::forge("hospital/template.php", array(
        "title" => "Login",
        "contents" => View::forge("hospital/login.php", array(
        'failed' => false, 
        "user" => $user
        ))
        ));
        hospitalmodel::set_user($user);
        //return Response::forge($view);
        return Response::redirect('index/hospital/index');
	}
	else{
        $view = View::forge("hospital/template.php", array(
        "title" => "Login",
        "contents" => View::forge("hospital/login.php", array(
        'failed' => true,
        'user' => $user
        ))
        ));
        return Response::forge($view);
	}
	}
	
	public function return_login_validation($username, $password){
		if($username === "ct310" && $password === 'cookiesareyummy'){
		return "ct310";
	}
	else if($username === "ct310admin" && $password === "RoundPiesAreBest"){
		return "admin";
	}
	else{
		return "loggedout";
}

/*
    $val = validation::forge('registration-validation');
    $val->add('username', 'ct310')->add_rule('required');
    $val->add('password',  'cookiesareyummy')->add_rule('required');
    return $val;*/
}


}


?>
