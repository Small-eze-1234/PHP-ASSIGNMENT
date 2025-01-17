<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/dashboard/');
	// exit;
?>

<?php
// function custom_function(...$arg){


// $spliced=array_splice($arg ,3,4);
// return $spliced;
// }
// print_r (custom_function(1,2,3,4,5,6,7,8,9,10));
// exit
// function custom_function(...$arg){
  

// 	$scores=[100,50,60,90];
// 	$students=["Ade","Phillip","Chike","Duada"];
// 	$new= array_multisort($scores,SORT_DESC,SORT_REGULAR,$students);
// 	$giant  =[
// 		'scores'=>$scores,
// 		'students' =>$students
// 	];
// 	foreach($giant['scores'] as $index => $score){
// 		echo $giant['students'][$index]." scored:".$score."%<br>";
// 	};
	

// 	return $students;
	
// }
// custom_function(1,2,3,4,5,6,7,8,9,10);
// 	exit;
?>
<?php
function Dataset(){
$cars=["Toyota","Corola","High Lander","Pathpinder","Lexus","Camery","Opel"];
$value=["#2,000,000","#2,000,000","#2,000,000","#2,000,000","#2,000,000","#2,000,000","#2,000,000"];
$name=["Ade","Ade","Ade","Ade","Ade","Ade","Ade"];
$salary=["#50,000","#50,000","#50,000","#50,000","#50,000","#50,000","#50,000",];
$debt=["#400,000","#400,000","#400,000","#400,000","#400,000","#400,000","#400,000",];
$result=array_merge($cars,$value,$name,$salary,$debt);
print_r($result);
// $new= array_multisort($cars,$value,$name,$salary,SORT_DESC,SORT_REGULAR,$debt);
// $giant =array(
// 	'cars'=>$cars,
// 	'value'=>$value,
// 	'name'=>$name,
// 	'salary'=>$salary,
// 	'debt'=>$debt,
	
	
// );
// foreach($giant['name'] as $index => $name){
// 	echo $giant[$index];
// 	// return $richest;
// };
};
// foreach($giant['name'] as $index => $name){
// 	echo $giant["name"][$index]."Richest man:".$salary;
// };
// return $name;
// }
// Dataset(1,2,3,4,5,6,7,8,9,10);
// 	exit;
function richest(){
	$richest=["Ade"];
	$giant =[
		
		"richest"=>$richest
	];
foreach($giant['richest'] as $index => $richest){
	echo $giant['richest'][$index]." Is The Richest Man"."<br>";
	return $richest;
};
};

function poorest(){
	$poorest=["Ade"];
	$giant =[
		
		"poorest"=>$poorest
	];
foreach($giant['poorest'] as $index => $poorest){
	echo $giant['poorest'][$index]." Is The Poorest Man"."<br>";
	return $poorest;
};
};
function middle(){
	$middle=["Ade"];
	$giant =[
		
		"middle"=>$middle
	];
foreach($giant['middle'] as $index => $middle){
	echo $giant['middle'][$index]." Is The Middle Class Man";
	return $middle;
};
};

Dataset(1,2,3,4,5,6,7,8,9,10);
richest(1,2,3,4,5,6,7,8,9,10);
poorest(1,2,3,4,5,6,7,8,9,10);
middle(1,2,3,4,5,6,7,8,9,10)

?>


