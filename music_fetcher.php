<?php 

	//Getting the page number which is to be displayed  
	//$page = $_GET['page'];	
	$mood = $_GET['mood'];
	
	//Initially we show the data from 1st row that means the 0th row 
	$start = 0; 
	
	//Limit is 5 that means we will show 5 items at once
	$limit = 5; 
	
	//Importing the database connection 
	require_once('dbConnect.php');

	//Counting the total item available in the database 
	$re = mysqli_query($con, "SELECT * from music_data where mood in (select mood_id from mood_table where mood_name = '".$mood."')");
	$total =  mysqli_num_rows($re);
	
	$sql = "SELECT * from music_data where mood in (select mood_id from mood_table where mood_name = '".$mood."')";
	$result = mysqli_query($con,$sql);
	
	$res = array(); 
	
	while($row = mysqli_fetch_array($result)){
			array_push($res, array(
				"song_name"=>$row['song_name'],
				"album"=>$row['album'],
				"url"=>$row['url'])
				);
				
	}
	echo json_encode($res);
	
	
	/*//We can go atmost to page number total/limit
	$page_limit = $total/$limit; 
	
	//If the page number is more than the limit we cannot show anything 
	if($page<=$page_limit){
		
		//Calculating start for every given page number 
		$start = ($page - 1) * $limit; 
		
		//SQL query to fetch data of a range 
		$sql = "SELECT * from music_data limit $start, $limit";

		//Getting result 
		$result = mysqli_query($con,$sql); 
		
		//Adding results to an array 
		$res = array(); 

		while($row = mysqli_fetch_array($result)){
			array_push($res, array(
				"name"=>$row['name'],
				"publisher"=>$row['publisher'],
				"image"=>$row['image'])
				);
		}
		//Displaying the array in json format 
		echo json_encode($res);
	}else{
            echo "over";
    }*/
	?>