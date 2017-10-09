INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '1', 'Which javascript function can be used to pop up a warning to the user?');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '1', 'A field that uniquely identifies a row of a mySQL table is called?');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '1', 'Form data is available to a PHP script in which variable');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '1', 'Who makes the web standards?');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '2', 'Variables in PHP always bewgin with which character?');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '2', 'What is scope of the variables declared using let in javascript?');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '2', 'What does the mysqli_query function return on the successful execution of an insert query?');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '3', 'Which of the following is a widely use web server?');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '3', 'Which of the following statements is used to print in PHP?');
INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES (NULL, '3', 'The . operator is used for which of the following operations in PHP?');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '23', 'popup()', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '23', 'alert()', '1');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '23', 'warning()', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '23', 'error()', '0');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '24', 'Unique key', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '24', 'Principal key', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '24', 'Foreign key', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '24', 'Primary key', '1');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '25', '$_POST', '1');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '25', '$_FORM', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '25', '$_DATA', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '25', '$_SUBMIT', '0');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '26', 'Apple', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '26', 'Mozilla', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '26', 'Netscape', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '26', 'W3C', '1');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '27', '#', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '27', '$', '1');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '27', '<?php', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '27', '?', '0');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '28', 'Function', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '28', 'Block', '1');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '28', 'Global', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '28', 'File', '0');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '29', 'TRUE', '1');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '29', 'FALSE', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '29', 'NULL', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '29', 'Data from the table', '0');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '30', 'Sioux', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '30', 'Navajo', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '30', 'Apache', '1');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '30', 'Blackfoot', '0');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '31', 'Out', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '31', 'Write', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '31', 'Echo', '1');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '31', 'Display', '0');

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '32', 'Multiplication', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '32', 'Addition', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '32', 'Signifying the end of a statement', '0');
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES (NULL, '32', 'Concatenation', '1');

INSERT INTO `user` (`id`, `username`, `family_name`, `given_name`, `password`) VALUES (NULL, 'jbloggs', 'Bloggs', 'Joe', 'P@ss1');
INSERT INTO `user` (`id`, `username`, `family_name`, `given_name`, `password`) VALUES (NULL, 'jdoe', 'Doe', 'John', 'P@ss2');
INSERT INTO `user` (`id`, `username`, `family_name`, `given_name`, `password`) VALUES (NULL, 'jdupont', 'Dupont', 'Jean', 'P@ss3');