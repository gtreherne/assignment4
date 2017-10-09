<?php
// $sql = 'SELECT * FROM questions WHERE 1';

// $questions = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($questions);

// var_dump($row);
// $row = mysqli_fetch_assoc($questions);

// var_dump($row);

function check_login() {
	require('config.php');
	$message="";
	if(!empty($_POST["login"])) {
		$result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
		$row  = mysqli_fetch_array($result);
		if(is_array($row)) {
			$_SESSION["user_id"] = $row['id'];
		} else {
			$message = "Invalid Username or Password!";
		}
	}
	if(!empty($_POST["logout"])) {
		$_SESSION["user_id"] = "";
		session_destroy();
	}

	return $message;
}

function get_tests() {
	require('config.php');
	$query = 'SELECT * FROM test WHERE 1';
	$result = mysqli_query($conn,$query);
	$html;
	for ($i=0; $i < $result->num_rows; $i++) { 
		$row  = mysqli_fetch_array($result);
		$html .= '<li><a href="/assignment4/php/test.php?id='. $row['id'].'">'. $row['name'].'</a></li>';
	}
	return $html;
}

function get_qanda($id) {
	require('config.php');
	$query = 'SELECT * FROM test WHERE id = "'.$id.'"';
	$result = mysqli_query($conn,$query);
	$html .='<input type="hidden" name="test" value="'.$id.'">';
	if ($result->num_rows == 1){
		$test_row  = mysqli_fetch_array($result);
		$html .= '<h1>'. $test_row['name'].'</h1>';		
		$query = 'SELECT * FROM questions WHERE test_id = "'.$id.'"';
		$result = mysqli_query($conn,$query);
		
		for ($i=0; $i < $result->num_rows; $i++) { 
			$question_row  = mysqli_fetch_array($result);
			$html .= '<h4>'. $question_row['question'].'</h4>';
			$query = 'SELECT * FROM `answers` WHERE `question_id` = "'.$question_row['id'].'"';
			$answer_result = mysqli_query($conn,$query);
			
			for ($j=0; $j < $answer_result->num_rows; $j++) {
				$answer_row  = mysqli_fetch_array($answer_result); 
				$html .= '<input type="radio" name="'. $question_row['id'].'" value="'. $answer_row['id'].'"><label for="answer">'. htmlspecialchars($answer_row['answer']).'</label><br>';
			}		
		}
	}else{
		$html .= "test not found";
	}
	return $html;
}
function get_results($id) {
	require('config.php');
	$id = $conn->real_escape_string($_POST['test']);
	$query = 'SELECT * FROM test WHERE id = '.$id;
	$result = mysqli_query($conn,$query);
	$row  = mysqli_fetch_array($result);
	$html .= '<h1>'. $row['name'].' results</h1>';

	$query = 'SELECT * FROM questions WHERE test_id ='.$id;
	$result = mysqli_query($conn,$query);

		for ($i=0; $i < $result->num_rows; $i++) { 
			$question_row  = mysqli_fetch_array($result);

			$html .= '<h4>'. $question_row['question'].'</h4>';
			$query = 'SELECT * FROM answers WHERE question_id = '. $question_row['id'] .' AND correct = 1';
			$answer_result = mysqli_query($conn,$query);
			$row  = mysqli_fetch_array($answer_result);
			$html .= '<p>Correct answer: '. $row['answer'].'';

			if(array_key_exists($question_row['id'], $_POST)) {
				$query = 'SELECT * FROM `answers` WHERE `id` = '.($_POST[$question_row['id']]).'';
				$your_answer = mysqli_query($conn,$query);
				$row  = mysqli_fetch_array($your_answer);
				$html .= '<p>Your answer: '. $row['answer'].'';
			} else {
				$html .= '<p>Your answer: You did not answer this question.';
			}			
		}	
	return $html;
}
