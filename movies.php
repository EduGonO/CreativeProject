<?php

/*

author @edu

*/


// Get all the Category Names
$category = scandir(__DIR__ . '/movies/movies/', 1);

// We substract the .DS_Store, ".." and "." from the count since they are not
// actual categories
$count = sizeof($category)-3;

print($count);
/*

// This is out main array. It is created with the size of the amount of categories
// we have in a folder. This is very useful since it allows us to not worry if
// the user creates a new folder with new Q&As
$trivia[$count];

// We create the base for our directory String
$dir = "trivia/trivia/";

for($i =0; $i<$count; $i++) {

  // Creates a string with the directory of the first category
  // for example: "trivia/trivia/astronomy/*.txt"
  $dir = $dir.$category[$i]."/*.txt";

  // This array has all the text files
  $testcounting = glob($dir);

  // We create 2 arryas of questions and answers to fill them up as we
  // read the .txt files. We will then use them to fill out main array
  $qs[sizeof($testcounting)];
  $as[sizeof($testcounting)];

  $trivia[$i]["CategoryName"] = $category[$i];

  // Creates an array of all the questions and answers of the category
  for($j = 0; $j<sizeof($testcounting); $j++) {

    // We read the text
    $info = file($testcounting[$j], FILE_IGNORE_NEW_LINES);

    // We add an question to our Questions array
    $qs[$j] = array(
      "Question" => $info[0],
    );

    // We add an answer to our Answers array
    $as[$j] = array(
      "Answer" => $info[1],
    );
  }

  // We add the questions and Answers to our main array
  $trivia[$i]["Question"] = $qs;
  $trivia[$i]["Answer"] = $as;

  // We reset the Question and Answer Arrays
  $qs = array();
  $as = array();

  // We reset the adress before the next loop
  $dir = "trivia/trivia/";
}

// We echo all the trivia info as a JSON and create a file
$JSON = json_encode($trivia, JSON_PRETTY_PRINT);
echo $JSON;
$myfile = fopen("trivia.json", "w") or die("nope");

fwrite($myfile, $JSON);


/*

*/


*/
?>
