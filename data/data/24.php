<?php
	header("Content-Type: application/json");
	$array = [
				"module_title" => "Adverbs",
				"objective"  => "<ul> 
				<li>Identify <i>Adverbs</i></li> 
				<li>Identify the <i>different kinds of adverbs</i></li>
				<li>Use adverbs correctly</i></li> </ul>",
				"tutorial" => [
									[
										"title"   => "Introduction",
										"lesson_type" => "side_tabs",
										"content" =>"An adverb is a word that describes a verb,an adjective, and another adverb. <br> They answer questions such as:<br>• How <br>• Where <br>• When <br>• How often <br>• How much"
									],
									[
										"title"   => "Kind of verbs",
										"lesson_type" => "side_tabs",
										"tab_buttons" => ["Adverbs of Place","Adverbs of Time","Adverbs of Manner","Adverbs of Frequency"],
										"tab_buttons_content" => ["Words and phrases that tell where an action is done are called adverbs of place.<br>Example:<br>• A boy sat at the foor of the mountain.",
																  "Words and phrases that tell when an action is done are called adverbs of time.<br>Example:<br>• The couple recently donated money to their chosen charity.",
																  "Words that tell how an action is done are called adverbs of manner.<br>Example:<br>• The pupils excitedly entered their classroom.<br>Note:Most adverbs are formed by adding -ly at the end of the word that describes (adjective).",
																  "Words that tell how often an action is done are called adverbs of frequency.<br>An adverb of frequency comes before a verb except a be verb.<br>Example:<br>• The bright girl is seldom absent in class.(Adverb of frequency comes after the be verb 'is')<br>• My friend always sends me text messages that are inspirational. (Adverb of frequency comes before the action word 'sends')"],
										"content" => ""
									],
									[
										"title"   => "Examples",
										"lesson_type" => "side_tabs",
										"tab_buttons" => [],
										"tab_buttons_content" => [],
										"content" => "  space_in   Read and study the paragraph
			A young boy lieks to say in the library. He usually stays there. He reads books of all sorts. I noticed that he reads geography books diligently. On weekends during his free time, he stays in the family room to read. His mother told me that her son started reading at an early age. Today, he readys novels and starts writing his storybook. <br> 1.Where does the boy like to stay?
	<br> The answers are in the library and in the family room.
	 space_out space_in 
	Read and study the paragraph
			A young boy lieks to say in the library. He usually stays there. He reads
		books of all sorts. I noticed that he reads geography books diligently. On weekends during his free time, he stays in the family room to read. His mother told me that her son started reading at an early age. Today, he readys novels and starts writing his storybook.
	<br> 2.How often does he stay in the library?
	<br> The answer is usually.
	 space_out space_in 
	Read and study the paragraph
			A young boy lieks to say in the library. He usually stays there. He reads
		books of all sorts. I noticed that he reads geography books diligently. On weekends during his free time, he stays in the family room to read. His mother told me that her son started reading at an early age. Today, he readys novels and starts writing his storybook.
	<br> 3.When does he stay in the family room?
	<br> The answer is on weekends during his free time.
	 space_out space_in 
	Read and study the paragraph
			A young boy lieks to say in the library. He usually stays there. He reads
		books of all sorts. I noticed that he reads geography books diligently. On weekends during his free time, he stays in the family room to read. His mother told me that her son started reading at an early age. Today, he readys novels and starts writing his storybook.
	<br> 4.When did he start reading?
	<br> The answer is at an early age.
	 space_out space_in 
	Read and study the paragraph
			A young boy lieks to say in the library. He usually stays there. He reads
		books of all sorts. I noticed that he reads geography books diligently. On weekends during his free time, he stays in the family room to read. His mother told me that her son started reading at an early age. Today, he readys novels and starts writing his storybook.
	<br> 5.How does he read?
	<br> The answers are diligently and fluently.
	 space_out space_in 
	<br> ♦The answer to the five questions are called adverbs.
	<br> ♦The answer to question 1 are adverbs of place as they tell where an action is done.
	<br> ♦The answer to question 2 is called an adverb of frequency as it tells how often an action is done.
	<br> ♦The answers to questions 3 and 4 are adverbs of time as they tell when an action is done.
	<br> ♦The answers to question 5 are adverbs of manners as they tell how or in what manner an action is done."
									]
				],
				
				"activity"   => [
						 [
							"title"=> " Adverbs",
							"instruction"=> "Click on the adverb in each sentence",
							"questions" => [
												[
													"question_text" =>  "My/friend,/Fyodor,/was/born/in/Russia.",
													"question_type" => "sentence_fragment_sentence",

													"question_answer" => ["in Russia."],
												],
												[
													"question_text" =>  "He/usually/sends/me/a/package/of/miniature/things/about/his/country.",
													"question_type" => "sentence_fragment_sentence",
													
													"question_answer" => ["usually"],
												],

												[
													"question_text" =>  "The/package/is/wrapped/beautifully/with/matching/ribbons.",
													"question_type" => "sentence_fragment_sentence",
													
													"question_answer" => ["beautifully"],
												],
												[
													"question_text" =>  "I/fervently/pray/that/he/grows/up/to/be/a/good/man.",
													"question_type" => "sentence_fragment_sentence",
													
													"question_answer" => ["fervently"],
												],
												[
													"question_text" =>  "He/rides/the/train/every/day/to/go/to/school.",
													"question_type" => "sentence_fragment_sentence",
													"question_answer" => ["every day"],
												]
											]

						],



[

"title"=> "Adverbs",
							"instruction"=> "Identify the type of adverb. Click the correct answer.",
							"questions" => [
												


												[
													"question_text" => "Last year",
													"question_type" => "multiple_choice",
													"question_choices" => ["Place","Manner","Time","Frequency"],
													"question_answer" => ["Time"],
												],
												[
													"question_text" => "In Russia",
													"question_type" => "multiple_choice",
													"question_choices" => ["Place","Manner","Time","Frequency"],
													"question_answer" => ["Place"],
												],
												[
													"question_text" => "Usually",
													"question_type" => "multiple_choice",
													"question_choices" => ["Place","Manner","Time","Frequency"],
													"question_answer" => ["Frequency"],
												],
												[
													"question_text" => "Every day",
													"question_type" => "multiple_choice",
													"question_choices" => ["Place","Manner","Time","Frequency"],
													"question_answer" => ["Time"],
												],
												[
													"question_text" => "Once",
													"question_type" => "multiple_choice",
													"question_choices" => ["Place","Manner","Time","Frequency"],
													"question_answer" => ["Time"],
												],
											]


]

					]
			];
	
	echo $json =  json_encode($array);
?>