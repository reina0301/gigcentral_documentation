<?php
//gig_student_model.php
/*
* @package gig_student_model.php
* @author Xiaomei Xie, cluetrain?
* @version 1.0 2014/06/20
* @link https://github.com/reina0301/gigcentral_documentation
* @license http://opensource.org/licenses/osl-3.0.php 
* @see gig_student_list.php
* @see add_student_list.php
*/

/*
* Gig_student_model is a name of class.
* Class names must have the first letter capitalized with the rest of the name lowercase.
* Make sure the class extends the base Model class.
*/
class Gig_student_model extends CI_Model
	{
	/*
	* Constructor for class "Gig_student_model".
	* @param none
	* @return self
	* @todo none
	*/
	function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}
	
	/*
	* get_student_list() shows all data in table named gig_student_initial.
	* @param none
	* @return string Database table named "gig_student_initial"
	* @todo none
	*/
	public function get_student_list()
	{
		//$query = $this->db->get('gig_student_initial');
		//return $query->result_array();
		return $this->db->get('gig_student_initial');
	}//end get_mailing_list()
	
	/*
	* get_id() shows all data in table named mail_list.
	* @param integer $id The ID number of Student
	* @return string database table named "gig_student_initial"
	* @todo none
	*/
	public function get_id($id)
	{
		$this->db->select('StudentID,FirstName,LastName,EmailAddress,Password,Phone,Portfolio,LinkedIn,GitHub,Facebook,AreasInterest,EducationLevel,AdditionInfor');
		$this->db->where('StudentID',$id);
		return $this->db->get('gig_student_initial');
	}//end get_id()
	
	/*
	* insert() inserts a new row into the table "gig_student_initial" in the database.
	* @param integer $row The row of table named "gig_student_initial"
	* @return string insert_id
	* @todo none
	*/
	public function insert($row)
	{
		$this->db->insert('gig_student_initial',$row);
		return $this->db->insert_id();
	}//end insert();
}
/* End of file gig_student_model.php */
?>