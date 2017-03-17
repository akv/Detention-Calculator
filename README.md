Installation
------------
1.  Clone or download the repo provided with the Github Repo

2.  Set up the correct database login information in config.php file 
3. Create a DAtAbase as and run the SQL mentioned in DB.config file 
Usage
-----
1.  Setting up the controller
  Create controller in controller Folder
2.  Loading view file in the controller
    	$this->load->viewFile("home");			
     ```php
        $this->load->viewFile("home");	
    ```	
3.  Setting up the Model

    ```php
    <?php

	class Home_model extends Model
	{
		public function __construct()
		{
			parent::__construct();
			
		}
    ```
	

4.  Loading Query in the Model

    ```php
    <?php
	Example showing how to create model and execute the query.
	public function get_query_result()
	{
		$sql = "select * from test_db";
		$query = $this->db->query($sql);
		
		//Complete array result
		$result = $query->result_array();
		
	
	}
    ```
	
5. Connect by using ?controller=home&method=method_name

Requirements
------------
*  PHP version 5.5.1 or newer