<?php
namespace Model;
use \debug;
use \DB;

class HospitalModel extends \Model {


    public static function get_hospitals($from, $amount){
     return DB::query(
      "SELECT DISTINCT Provider_Name, Provider_State, Provider_Id FROM medicare LIMIT $amount OFFSET $from", DB::SELECT
      
     )->execute()->as_array();
    }
	public static function get_drgs($from, $amount){
		$data = DB::query(
			"SELECT DISTINCT(DRG_Definition) FROM medicare LIMIT $amount OFFSET $from", DB::SELECT
		)->execute()->as_array();
		$to_return = array();
		foreach ($data as $row){
			$splits = explode('-', $row['DRG_Definition']);
			$new_row = array();
			$new_row['DRG_Number'] = trim($splits[0]);
			$new_row['DRG_Definition'] = trim($splits[1]);
			$to_return[] = $new_row;
			
		}
		return $to_return;
	}
    public static function get_mpn($from, $amount){
    return DB::query(
    "SELECT DISTINCT Provider_Id, Provider_Name, Provider_Street_Address, Provider_State, 
	Provider_Zip Code FROM medicare LIMIT $amount OFFSET $from", DB::SELECT)->execute()->as_array();
    }


    public static function drg($from, $amount){
        return DB::query(
    "SELECT DISTINCT DRG_Definition, Average_Covered_Charges, Average_Total_Payments, Average_Medicare_Payments 
	FROM medicare LIMIT $amount OFFSET $from", DB::SELECT)->execute()->as_array();
    }
	
	public static function set_user($user){
    DB::query("UPDATE user SET logged_in = 'no' WHERE user = 'ct310'", DB::UPDATE)->execute();
    DB::query("UPDATE user SET logged_in = 'no' WHERE user = 'admin'", DB::UPDATE)->execute();
    DB::query("UPDATE user SET logged_in = 'no' WHERE user = 'loggedout'", DB::UPDATE)->execute();
    DB::query("UPDATE user SET logged_in = 'yes' WHERE user = '$user'", DB::UPDATE)->execute();
    }
    
    public static function get_user(){
    $val = DB::query("SELECT user FROM user WHERE logged_in = 'yes'", DB::SELECT)->execute()->as_array();
    foreach ($val as $v){
    foreach($v as $w){
    if(!($w === 'yes')){
    return $w;
    }}}
    }
    }
    
?>

