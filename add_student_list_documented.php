<?php
//views/gig/add_student_list.php
//a form to create a new gig
/*
	string companyName
	string companyURL (optional)
	string companyEmail
	string companyPhone (optional)
	string gigType (can be full-time, part-time, volunteer, contract or internship)
	string gigLocation
	array gigCategories (can include art, design, development, programming, mobile, front-end, back-end and other)
	string positionTitle
	string positionId (optional)
	string positionDesc
*/
echo '<p></p>';
echo validation_errors();

?>
<h1>A Student Register Form</h1>
<fieldset><legend>Add_Student_list</legend>
<?=form_open('gig_student_list/insert');?>
<?php
	
	
	$FirstName = array(
		'name' => 'FirstName',
		'id' => 'FirstName',
		'value' => set_value('FirstName',''),
	);
	
	$req = 'required="required"';
	 echo form_label('First Name','FirstName') . ' ';
	echo form_input($FirstName,'',$req) . '<br />';
   

   $LastName = array(
		'name' => 'LastName',
		'id' => 'LastName',
		'value' => set_value('LastName',''),
	);
	 echo form_label('Last Name','LastName') . ' ';
	echo form_input($LastName,'',$req) . '<br />';
    
    $EmailAddress = array(
		'name' => 'EmailAddress',
		'id' => 'EmailAddress',
		'value'=>set_value('EmailAddress',''),
	);
	 echo form_label('Email','EmailAddress') . ' ';
	echo form_input($EmailAddress,'',$req) . '<br />';
	
	 $Password = array(
		'name' => 'Password',
		'id' => 'Password',
		'value' => set_value('Password',''),
	);
	 echo form_label('Password','Password') . ' ';
	echo form_password($Password,'',$req) . '<br />';
	
	 $PasswordValidation = array(
		'name' => 'PasswordValidation',
		'id' => 'PasswordValidation',
		'value' => set_value('PasswordValidation',''),
	);
	 echo form_label('PasswordValidation','PasswordValidation') . ' ';
	echo form_password($PasswordValidation,'',$req) . '<br />';
    
    
	 $Phone = array(
		'name' => 'Phone',
		'id' => 'Phone',
		'value' => set_value('Phone',''),
	);
	 echo form_label('Phone','Phone') . ' ';
	echo form_input($Phone) . '<br />';
	
    $Portfolio = array(
		'name' => 'Portfolio',
		'id' => 'Portfolio',
		'value' => set_value('Portfolio',''),
	);
	 echo form_label('Portfolio','Portfolio') . ' ';
	echo form_input($Portfolio) . '<br />';
    
	 $LinkedIn = array(
		'name' => 'LinkedIn',
		'id' => 'LinkedIn',
		'value' => set_value('LinkedIn',''),
	);
	 echo form_label('LinkedIn','LinkedIn') . ' ';
	echo form_input($LinkedIn) . '<br />';
	
	
	$GitHub = array(
		'name' => 'GitHub',
		'id' => 'GitHub',
		'value' => set_value('GitHub',''),
	);
	 echo form_label('GitHub','GitHub') . ' ';
	echo form_input($GitHub) . '<br />';
	
	$Facebook = array(
		'name' => 'Facebook',
		'id' => 'Facebook',
		'value' => set_value('Facebook',''),
	);
	 echo form_label('Facebook','Facebook') . ' ';
	echo form_input($Facebook) . '<br />';
	
	/*$interests = array(
		'name' => 'interests',
		'id' => 'interests',
	);
	('Design','Front end Development','Back end Development/Server Side','Database','Networking/Hardware/IT'
	'Associate Degree','Certificate','In progress'
	*/
	$EducationLevel = array(
		''  => 'Please Select',
		'Associate Degree' => 'Associate Degree',
		'Certificate' => 'Certificate',
		'In progress' => 'In progress',
		
	);
	 echo form_label('EducationLevel','EducationLevel') . '<span class="required">*</span> ';
	echo form_multiselect('EducationLevel',$EducationLevel) . '<br />';
	
	echo form_label('AreasInterest','AreasInterest') . ' ';
	
	
	$Design = array(
		'name'		=>	'AreasInterest[]',
		'id'		=>	'AreasInterest-1',
		'value'		=>	set_value('Design'),
		'checked'	=>	FALSE,
	);
	
	echo '<label for="AreasInterest-1" class="checkbox">' . 
			form_checkbox($Design) .
			'Design</label>';
	
	$Front_Development = array(
		'name'		=>	'AreasInterest[]',
		'id'		=>	'AreasInterest-2',
		'value'		=>	set_value('Front end Development'),
		'checked'	=>	FALSE,
	);
	
	echo '<label for="AreasInterest-2" class="checkbox">' . 
			form_checkbox($Front_Development) .
			'Front Development</label>';
			
	$Back_Development_Server_Side = array(
		'name'		=>	'AreasInterest[]',
		'id'		=>	'AreasInterest-3',
		'value'		=>	set_value('Back End Development/Server Side'),
		'checked'	=>	FALSE,
	);
	
	echo '<label for="AreasInterest-3" class="checkbox">' . 
			form_checkbox($Back_Development_Server_Side) .
			'Back End Development/Server Side</label>';		
	
	$Database = array(
		'name'		=>	'AreasInterest[]',
		'id'		=>	'AreasInterest-4',
		'value'		=>	set_value('Database'),
		'checked'	=>	FALSE,
	);
	
	echo '<label for="AreasInterest-4" class="checkbox">' . 
			form_checkbox($Database) .
			'Data base</label>';
	
	$Networking_Hardware_IT = array(
		'name'		=>	'AreasInterest[]',
		'id'		=>	'AreasInterest-5',
		'value'		=>	set_value('Networking/Hardware/IT'),
		'checked'	=>	FALSE,
	);
	
	echo '<label for="AreasInterest-5" class="checkbox">' . 
			form_checkbox($Networking_Hardware_IT) .
			'Networking/Hardware/IT</label>';
	 echo form_error('AreasInterest'); 
	 
     $AdditionInfor = array(
		'name' => 'AdditionInfor',
		'id' => 'AdditionInfor',
		'value' => set_value('AdditionInfor',''),
	);
	 echo form_label('AdditionInfor','AdditionInfor') . ' ';
	echo form_textarea($AdditionInfor) . '<br />';
	
	 
?>
<?=form_submit('submit','Add To Student List');?>
<?=form_close();?>