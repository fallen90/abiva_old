<?php
	header("Content-Type: application/json");
	$array = [
				"module_title" => "Demonstrative Pronouns",
				"objective"  => "<ul> <li>Identify and use demonstrative pronouns correctly</li> <li>Distinguish demonstrative pronouns from adjectives</li> </ul>",
				"tutorial" => [
									[
										"title"   => "Demonstrative Pronouns",
										"content" =>"<p>Demonstrative Pronouns are used to point to persons, things, or places. They come before verbs.</p> <p>The words this, these, that, and those are demonstrative pronouns.</p> <p>This is used to point to a thing, person, or place near the speaker.</p> <h3>Example</h3> <p class='example'>This is the book she needs for her test.</p> <p>These is used to point to two or more things, persons, or places near the speaker.</p> <h3>Example</h3> <p class='example'>These were the books she needed for her test.</p>"
									],
									[
										"title"   => "Differentiate Demonstrative Pronouns and Adjective",
										"content" => "<p>Read the sentences below to find out the difference between demonstrative pronouns and adjectives</p>"
									]
				],
				"activity"   => [
						 [
							"title"=> "Identifying Demonstrative Pronouns",
							"instruction"=> "Read each paragraph and click the demonstrative pronouns. only ten clicks are allowed",
							"questions" => [
												[
													"question_text" => "There are thirty pupils in the grade 3 class. These are the girls and those are the boys. This is Celia. As the tallest girl in class, she was chosen as the team captain of the girl's cheering squad. Those are the pictures of the girl taken when they won as champion in a cheering competition.#This is Anton. he is the smartest and most responsible in the class. he has been the class president for three years now. These are his certificates of being a good leader. Everyone in the class likes him.#The grade 3 class is a model class for cleanliness. Those are the boxes where peices of scratch paper are kept. That green trash can is for plastic containers. This is where the pupils put the plastic bottles they have collected and sell them.#Truly, this calss is composed of resopnsible pupils.",
													"question_type" => "sentence_fragment_multiline",
													"question_answer" => ["These","those","This","Those","This","These","Those","That","This","this"],
												]
											]

						],
						[
							"title"=> "Differentiating Demonstrative Pronouns from Adjectives.",
							"instruction"=> "Identify if the underlined word is a demonstrative pronoun or an adjective. Click on the correct option.",
							"questions" => [
												[
													"question_text" => "<u>This</u> is the place where my grandparents live.",
													"question_type" => "dual_selection",
													"question_choices" => ["Demonstrative Pronoun","Adjective"],
													"question_answer" => "Demonstrative Pronoun"
												],
												[
													"question_text" => "<u>This</u> house was built in the early 1960s.",
													"question_type" => "dual_selection",
													"question_choices" => ["Demonstrative Pronoun","Adjective"],
													"question_answer" => "Adjective"
												],
												[
													"question_text" => "<u>These</u> are treasured by the whole family.",
													"question_type" => "dual_selection",
													"question_choices" => ["Demonstrative Pronoun","Adjective"],
													"question_answer" => "Demonstrative Pronoun"
												],
												[
													"question_text" => "<u>These</u> were mostly given to here as birthday gifts.",
													"question_type" => "dual_selection",
													"question_choices" => ["Demonstrative Pronoun","Adjective"],
													"question_answer" => "Demonstrative Pronoun"
												],
												[
													"question_text" => "<u>That</u> beatiful family portrait on the wall is memorable.",
													"question_type" => "dual_selection",
													"question_choices" => ["Demonstrative Pronoun","Adjective"],
													"question_answer" => "Adjective"
												]
											]

						]
					]
			];
	echo $json =  json_encode($array2);
?>