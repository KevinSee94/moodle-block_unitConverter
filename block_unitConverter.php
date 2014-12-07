<?php
class block_unitConverter extends block_base {

//variables
$inputUnits;
$outputUnits;
$outputValue;
$inputValue;
	public funtion init(){
		$this->title = get_string('unitConverter', 'block_unitConverter');
	}

	//giant conversion function
	//This function handles all possible unit conversions
	//Any additions to the defualt units must be coded in here
	public function convert( $inputUnits,$outputUnits,$inputValue )
	{
		if($inputUnits == 'null')
		{
			$outputValue = 0.0;
		}
		else if($inputUnits == "Grams")
		{
			if($outputUnits == "Kilograms")
			{
				$outputValue = $inputValue * ( 1.0 / 1000.0 );
			}
			else if($outputUnits == "Milligrams")
			{
				$outputValue = $inputValue * ( 1000.0 );
			}
			else if($outputUnits == "Pounds")
			{
				$outputValue = $inputValue * 0.002205;
			}
			else if($outputUnits == "Ounces")
			{
				$outputValue = $inputValue * 0.03527;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Kilograms")
		{
			if($outputUnits == "Grams")
			{
				$outputValue = $inputValue * 1000.0;
			}
			else if($outputUnits == "Milligrams")
			{
				$outputValue = $inputValue * 1000000.0;
			}
			else if($outputUnits == "Pounds")
			{
				$outputValue = $inputValue * 2.205;
			}
			else if($outputUnits == "Ounces")
			{
				$outputValue = $inputValue * 35.27;
			}
			else
			{
				$outputValue = 0.0;
			}	
		}
		else if($inputUnits == "Milligrams")
		{
			if($outputUnits == "Grams")
			{
				$outputValue = $inputValue / 1000.0;
			}
			else if($outputUnits == "Kilograms")
			{
				$outputValue = $inputValue / 1000000.0;
			}
			else if($outputUnits == "Pounds")
			{
				$outputValue = $inputValue * 0.000002205;
			}
			else if($outputUnits == "Ounces")
			{
				$outputValue = $inputValue * 0.00003527;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Pounds")
		{
			if($outputUnits == "Grams")
			{
				$outputValue = $inputValue * 453.6;
			}
			else if($outputUnits == "Kilograms")
			{
				$outputValue = $inputValue * 0.4536;
			}
			else if($outputUnits == "Milligrams")
			{
				$outputValue = $inputValue * 453600.0;
			}
			else if($outputUnits == "Ounces")
			{
				$outputValue = $inputValue * 16.0;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Ounces")
		{
			if($outputUnits == "Grams")
			{
				$outputValue = $inputValue * 28.35;
			}
			else if($outputUnits == "Kilograms")
			{
				$outputValue = $inputValue * 0.02835;
			}
			else if($outputUnits == "Milligrams")
			{
				$outputValue = $inputValue * 28350.0;
			}
			else if($outputUnits == "Ounces")
			{
				$outputValue = $inputValue * 0.625;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Fahrenheit")
		{
			if($outputUnits == "Celcius")
			{
				$outputValue = ($inputValue - 32.0) * (5.0/9.0);
			}
			else if($outputUnits == "Kelvin")
			{
				$outputValue = ($inputValue - (32.0 + 273.15) * (5.0/9.0));
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Celcius")
		{
			if($outputUnits == "Fahrenheit")
			{
				$outputValue = ($inputValue * (9.0/5.0)) + 32.0;
			}
			else if($outputUnits == "Kelvin")
			{
				$outputValue = $inputValue + 273.15;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Kelvin")
		{
			if($outputUnits == "Celcius")
			{
				$outputValue = $inputValue - 273.15;
			}
			else if($outputUnits == "Fahrenheit")
			{
				$outputValue = (((9.0/5.0) * $inputValue ) + 32.0 ) - 273.15;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Meters")
		{
			if($outputUnits == "Centimeters")
			{
				$outputValue = $inputValue * 100.0;
			}
			else if($outputUnits == "Millimeters")
			{
				$outputValue = $inputValue * 1000.0;
			}
			else if($outputUnits == "Micrometers")
			{
				$outputValue = $inputVaule * 1000000.0;
			}
			else if($outputUnits == "Inches")
			{
				$outputValue = $inputValue * 39.3700787;
			}
			else if($outputUnits == "Feet")
			{
				$outputValue = $inputValue * 3.280839;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Centimeters")
		{
			if($outputUnits == "Meters")
			{
				$outputValue = $inputValue / ( 1.0 / 100.0 );
			}
			else if($outputUnits == "Millimeters")
			{
				$outputValue = $inputValue * 10.0;
			}
			else if($outputUnits == "Micrometers")
			{
				$outputValue = $inputValue * 10000.0;
			}
			else if($outputUnits == "Inches")
			{
				$outputValue = $inputValue * 0.3937;
			}
			else if($outputUnits == "Feet")
			{
				$outputValue = $inputValue * 0.032808;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Millimeters")
		{
			if($outputUnits == "Meters")
			{
				$outputValue = $inputValue * ( 1.0 / 1000.0 );
			}
			else if($outputUnits == "Centimeters")
			{
				$outputValue = $inputValue * ( 1.0 / 10.0 );
			}
			else if($outputUnits == "Micrometers")
			{
				$outputValue = $inputValue * 1000.0;
			}
			else if($outputUnits == "Inches")
			{
				$outputValue = $inputValue * 0.03937;
			}
			else if($outputUnits == "Feet")
			{
				$outputValue = $inputValue * 0.0032808;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Micrometers")
		{
			if($outputUnits == "Meters")
			{
				$outputValue = $inputValue * ( 1.0 / 1000000.0 );
			}
			else if($outputUnits == "Centimeters")
			{
				$outputValue = $inputValue * ( 1.0 / 10000.0 );
			}
			else if($outputUnits == "Millimeters")
			{
				$outputValue = $inputValue * ( 1.0 / 1000.0 );
			}
			else if($outputUnits == "Inches")
			{
				$outputValue = $inputValue * 0.00003937;
			}
			else if($outputUnits == "Feet")
			{
				$outputValue = $inputValue * 0.0000032808;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Inches")
		{
			if($outputUnits == "Meters")
			{
				$outputValue = $inputValue * 0.0254;
			}
			else if($outputUnits == "Centimeters")
			{
				$outputValue = $inputValue * 2.54;
			}
			else if($outputUnits == "Micrometers")
			{
				$outputValue = $inputValue * 25400.0;
			}
			else if($outputUnits == "Millimeters")
			{
				$outputValue = $inputValue * 25.4;
			}
			else if($outputUnits == "Feet")
			{
				$outputValue = $inputValue * ( 1.0 / 12.0 );
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Feet")
		{
			if($outputUnits == "Meters")
			{
				$outputValue = $inputValue * 0.3048;
			}
			else if($outputUnits == "Centimeters")
			{
				$outputValue = $inputValue * 30.48;
			}
			else if($outputUnits == "Micrometers")
			{
				$outputValue = $inputValue * 304800.0;
			}
			else if($outputUnits == "Inches")
			{
				$outputValue = $inputValue * 12.0;
			}
			else if($outputUnits == "Millimeters")
			{
				$outputValue = $inputValue * 304.8;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Joules")
		{
			if($outputUnits == "BTU")
			{
				$outputValue = $inputValue * 0.0009484513;
			}
			else if($outputUnits == "Calories")
			{
				$outputValue = $inputValue * 0.29300593614;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "BTU")
		{
			if($outputUnits == "Joules")
			{
				$outputValue = $inputValue * 1055.0559;
			}
			else if($outputUnits == "Calories")
			{
				$outputValue = $inputValue * 252.1644;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Calories")
		{
			if($outputUnits == "BTU")
			{
				$outputValue = $inputValue * 4.184;
			}
			else if($outputUnits == "Joules")
			{
				$outputValue = $inputValue *  0.003965666;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Liters")
		{
			if($outputUnits == "Milliliters")
			{
				$outputValue = $inputValue * 1000.0;
			}
			else if($outputUnits == "Gallons")
			{
				$outputValue = $inputValue * ( 1.0 / 3.7854 );
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Milliliters")
		{
			if($outputUnits == "Liters")
			{
				$outputValue = $inputValue * ( 1.0 / 1000.0 );
			}
			else if($outputUnits == "Gallons")
			{
				$outputValue = $inputValue * ( 1.0 / 3785.411 );
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else if($inputUnits == "Gallons")
		{
			if($outputUnits == "Milliliters")
			{
				$outputValue = $inputValue * 3785.411;
			}
			else if($outputUnits == "Liters")
			{
				$outputValue = $inputValue * 3.7854;
			}
			else
			{
				$outputValue = 0.0;
			}
		}
		else
		{
			$outputValue == 0.0;
		}
		//End if statements, return value
		return $outputValue;
	}


	public function get_content() {
		if ($this->content !== null) {
			return $this->content;
		}

		$this->content = new stdClass
		$this->content->text = 'Unit Conversion';
		$this->content->text = 'Select Input Units';
		//I need to test to learn how to format these correctly, and the documentation is slightly
		//lacking, so I'll just leave these here for the time being.  I'll need one editable text area, an uneditable text box,
		//two select boxes, and a button.  I need to define a custom onclick handler for the button that gets the current values from the
		//editable text box and the select boxes, passes those as arguments to the convert function, and outputs the return value of that function
		//in the uneditable text box.  It's a fairly simple concept, but I need to learn to do it in PHP and have it play nice with Moodle.
		//$this->add_action_buttons();
		//$mform->addElement('textarea', 'introduction', get_string("introtext", "survey"), 'wrap="virtual" rows="20" cols="50"');
		//$mform->addElement( 'select', string, get_string('forumtype','forum'), $FORUM_TYPES);
		global $COURSE;
 
		$url = new moodle_url('/blocks/unitConverter/view.php', array('blockid' => $this->instance->id, 'courseid' => $COURSE->id));
		$this->content->footer = html_writer::link($url, get_string('addpage', 'block_unitConverter'));

		return $this->content;

	//COMMENTED OUT, THIS LIST WILL NEED TO BE USED SOMEWHERE SO I HAVE IT READY TO GO
	//Maybe make an array with these as values then pass it to the 
	//constructor for the select boxes?
	//Add input Unit box
		// <select name = "inputUnits">
		// 	<option value = "null">Input Units</option>
		// 	<option value = "null">---MASS CONVERSIONS---</option>
		// 	<option value = "Grams">Grams</option>
		// 	<option value = "Kilograms">Kilograms</option>
		// 	<option value = "Milligrams">Milligrams</option>
		// 	<option value = "Pounds">Pounds</option>
		// 	<option value = "Ounces">Ounces</option>
		// 	<option value = "null">---TEMPERATURE UNITS---</option>
		// 	<option value = "Fahrenheit">Fahrenheit</option>
		// 	<option value = "Celcius">Celcius</option>
		// 	<option value = "Kelvin">Kelvin</option>
		// 	<option value = "null">---LENGTH CONVERSIONS---</option>
		// 	<option value = "Meters">Meters</option>
		// 	<option value = "Kilometers">Kilometers</option>
		// 	<option value = "Centimeters">Centimeters</option>
		// 	<option value = "Millimeters">Millimeters</option>
		// 	<option value = "Micrometers">Micrometers</option>
		// 	<option value = "Inches">Inches</option>
		// 	<option value = "Feet">Feet</option>
		// 	<option value = "null">---ENERGY CONVERSIONS---</option>
		// 	<option value = "BTU">BTU</option>
		// 	<option value = "Joules">Joules</option>
		// 	<option value = "Calories">Calories</option>
		// 	<option value = "null">---VOLUME CONVERSIONS---</option>
		// 	<option value = "Liters">Liters</option>
		// 	<option value = "Milliliters">Milliliters</option>
		// 	<option value = "Gallons">Gallons</option>

	}
	//Specialization function from tutorial
	public function specialization() {
	  if (!empty($this->config->title)) {
	    $this->title = $this->config->title;
	  } else {
	    $this->config->title = 'Unit Converter';
	  }
	 
	  if (empty($this->config->text)) {
	    $this->config->text = 'Convert some Units';
	  }    
	}
	//Allow multiple blocks function
	public function instance_allow_multiple() {
		return true;
	}
	function has_config(){
		return true;
	}
	public function instance_config_save($data) {
  		if(get_config('unitConverter', 'Allow_HTML') == '1') {
  	 		 $data->text = strip_tags($data->text);
  		}
 		$data = stripslashes_recursive($data);
 		 $this->config = $data;
  		return set_field('block_instance', 
                   'configdata',
                    base64_encode(serialize($data)),
                   'id', 
                   $this->instance->id);
  	
  		return parent::instance_config_save($data);
	}
	public function hide_header(){
		return true;
	}
	public function html_attributes(){
		$attributes = parent::html_attributes(); //Get default values
		$attributes['class'] .= ' block_' $this->name(); //Append our class to class attribute
		return $attributes;
	}
} //close class
?>
