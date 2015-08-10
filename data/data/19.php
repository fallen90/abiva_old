<?php
	header("Content-Type: application/json");
	$array = [
				"module_title" => "Adjectives",
				"objective"  => "<ul> 
								<li>Identify <i>describing words</i> or <i>adjectives</i></li> 
								<li>Use adjectives correctly</li> 
								</ul>",
				"tutorial" => [
									[
										"title"   => "Adjectives",
										"lesson_type" => "side_tabs",
										"content" =>" space_in • Adjectives are words that describe nouns or pronouns.
	<br> Read and study the following sentences.
	<br>    	○ I love the smell of the salty sea.
	<br>    	○ I enjoy the sight of big and small waves.
	<br>    	○ We decorate the sandcastle with colorful flaglets.
	<br>    	○ The beach is an interesting place to visit during summer.
	<br>
	Read and study the following sentences.
	<br>    	○ I love the smell of the salty sea.
	<br>    	○ I enjoy the sight of big and small waves.
	<br>    	○ We decorate the sandcastle with colorful flaglets.
	<br>    	○ The beach is an interesting place to visit during summer.
	<br>    ♦ The word salty describes the sea.
	<br>    ♦ The words big and small describe the waves.  space_out space_in 
	<br>
	Read and study the following sentences.
	<br>    	○ I love the smell of the salty sea.
	<br>    	○ I enjoy the sight of big and small waves.
	<br>    	○ We decorate the sandcastle with colorful flaglets.
	<br>    	○ The beach is an interesting place to visit during summer.
	<br>    ♦ The word colorful describes the flaglets used to decorate the sandcastle.
	<br>    ♦ The word interesting describes the beach.
	<br>
	Read and study the following sentences.
	<br>    	○ I love the smell of the salty sea.
	<br>    	○ I enjoy the sight of big and small waves.
	<br>    	○ We decorate the sandcastle with colorful flaglets.  space_out space_in 
	<br>    	○ The beach is an interesting place to visit during summer.
	<br>    ♦The word salty, big, small, colorful, and interesting tell about or describe something. These words are adjectives.
	<br>
	Read and study the following phrases
	<br>    	○ beautiful lady; wonderful site
	<br>    	  The word beautiful and wonderful tell something about the nouns' qualities
	<br>    	○ round table; square box
	<br>    	  The words round and square tell something about the nouns' shapes. 
	<br>    	○ white clouds; red roses  space_out space_in 
	<br>    	  The words white and red tell something about the nouns' colors.
	<br>
	Read and study the following phrases
	<br>    	○ beautiful lady; wonderful site
	<br>    	  The word beautiful and wonderful tell something about the nouns' qualities
	<br>    	○ round table; square box
	<br>    	  The words round and square tell something about the nouns' shapes.
	<br>    	○ two pupils; four chairs  space_out space_in 
	<br>    	  The words two and four tell something about the nouns' number or quantities.
	<br>    ♦Adjective tell about the qualities, shapes, colors, size, and numbers or quantities of nouns and pronouns.
	<br>    ♦Adjectives may come before the words they describe or after be verbs.
	<br>    Examples:
	<br>    	○ The intelligent pupil solved the puzzle.
	<br>    	○ The street is narrow and crowded.
	<br>    	○ Football is an exciting game.  space_out "
									]
								],
				"activity"   => [
									[
										"title"=> "Adjectives",
										"instruction"=> "Identify the adjective and the noun or pronoun it describes",
										"questions" => [
															[
																"question_text" => "An old dictionary is kept on shelf.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Adjective", "Noun or Pronoun"],
																"question_answer" => ["old", "dictionary"]
															],
															[
																"question_text" => "The brown shelf was donated by a student.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Adjective", "Noun or Pronoun"],
																"question_answer" => ["brown", "shelf"]
															],
															[
																"question_text" => "The brilliant student collects dictionaries of all sizes.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Adjective", "Noun or Pronoun"],
																"question_answer" => ["brilliant", "student"]
															],
															[
																"question_text" => "His favorite is the big volume his grandfather gave.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Adjective", "Noun or Pronoun"],
																"question_answer" => ["big", "volume"]
															]
														]

									],
									[
									"title"=> "Adjectives",
									"instruction"=> "Click on the correct adjective. Take note of the given clues.",
									"questions" => [
											[
												"question_text" => "<div class='answer_field'></div> (shape) garden.",
												"question_type" => "multiple_choice_2",
												"question_choices" => ["Square","Oval","Five","Brilliant","Red"],
												"question_answer"=>"Oval"
											],
											[
												"question_text" => "<div class='answer_field'></div> (color) heart.",
												"question_type" => "multiple_choice_2",
												"question_choices" => ["Square","Oval","Five","Brilliant","Red"],
												"question_answer"=>"Red"
											],
											[
												"question_text" => "<div class='answer_field'></div> (shape) box.",
												"question_type" => "multiple_choice_2",
												"question_choices" => ["Square","Oval","Five","Brilliant","Red"],
												"question_answer"=>"Oval"
											],
											[
												"question_text" => "<div class='answer_field'></div> (quality) answer.",
												"question_type" => "multiple_choice_2",
												"question_choices" => ["Square","Oval","Five","Brilliant","Red"],
												"question_answer"=>"Brilliant"
											],
											[
												"question_text" => "<div class='answer_field'></div> (quantity) boys.",
												"question_type" => "multiple_choice_2",
												"question_choices" => ["Square","Oval","Five","Brilliant","Red"],
												"question_answer"=>"Five"
											],
											
										]

								],
				]
			];
	
	echo $json =  json_encode($array);
?>