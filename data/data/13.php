<?php
	header("Content-Type: application/json");
	$array = [
				"module_title" => "Demonstrative Pronouns",
				"objective"  => "<ul> <li>Identify and use demonstrative pronouns correctly</li> <li>Distinguish demonstrative pronouns from adjectives</li> </ul>",
				"tutorial" => [
									[
										"title"   => "Demonstrative Pronouns",
										"lesson_type" => "side_tabs",
										"content" =>" space_in Demonstrative pronouns are used to point to persons, things, or places. They come before verbs.<br>
										• The words this, these, that, and those are demonstrative pronouns.<br>
										• 'This' is used to point to a thing, person, or place near the speaker.<br>
										Example:<br>
										• This is the book she needs for her test.	                                         																																																																																													<br><br>
										• 'These' is used to point to two or more things, persons, or places near the speaker.<br>
										Example:<br>
										• These were the book she needs for her test.<br><br>
										 space_out space_in 
										•'That' is used to point to a thing, person, or place far from the speaker.<br>
										Example:<br>
										• That tastes good.	                                         																																																																																													<br><br>
										• 'Those' is used to point to two or more things, persons, or places far from the speaker.<br>
										Example:<br>
										• Those are his books.<br><br>
										• The words 'this','these','that' and 'those' are also used before nouns. In such cases they are called adjectives.<br>
										 space_out space_in 
										Example:<br>
										• She needs this book.<br>
										• She needs that book.<br>
										• That flower is pretty.	                                         																																																																																														                                         																																																																																													<br>
										• Those flowers are pretty.
										 space_out "
									],
									[
										"title"   => "Differentiate Demonstrative Pronouns and Adjective",
										"lesson_type" => "side_tabs",
										"content" => " space_in <table border='1' width='100%'>
										<tr>
											<th>Column A</th>
											<th>Column B</th>
										</tr>

										<tr>
											<td>1. This is the stage where Emily performs.</td>
											<td>1. This stage is the venue of many singing contest.</td>
										</tr>

										<tr>
											<td>2. These are her medals.</td>
											<td>2. These medals are significant to her.</td>
										</tr>

										<tr>
											<td>3. Those are her trophies on the table.</td>
											<td>3. Those songs are her favorite ones.</td>
										</tr>

										<tr>
											<td>4. That is the poster of Emily's upcoming musical play.</td>
											<td>4. That man wearing a blue shirt is her coach.</td>
										</tr>

									</table>
									In Column A, the sentences begin with this, these, those, and that. These words are used before verbs and are called demonstrative pronouns.In Column B, the words this, these, those, and that are used before nouns and are called adjectives. space_out "
									]
				],
				"activity"   => [
						 [
									"title"=> "Demonstrative Pronouns",
									"instruction"=> "Read each paragraph. Click the demonstrative pronouns. ",
									"questions" => [
												[
												"question_text" => "There are thirsty pupils in the grade 3 class. <div class='answer_field'></div> 
												are the girls <div class='answer_field'></div> are the boys. <div class='answer_field'></div>  is Celia. As the tallest in class
												, she was chosen as the team captain of the girl's cheering squad. <div class='answer_field'></div> are the pictures of the girls
												 taken when they won as champion in a cheering competition.<br>
												 <div class='answer_field'></div>  is Anton. He is the smartest and most responsible in the class. He has been the class 
												 president for three years now. <div class='answer_field'></div>  are his certificates of being a good leader. Everyone in the class
												  likes him.<br>
												  The grade 3 class is a model class for cleaniness. <div class='answer_field'></div> are the boxes where pieces of scratch paper are kept.
												  <div class='answer_field'></div> green trash can is for plastic containers. <div class='answer_field'></div>  is where the pupils put the
												   plastic bottles they have collected and sell them. Truly, <div class='answer_field'></div> class is composed of responsible pupils.",
													
													"question_choices" => [
																			["These","Those"," This"],
																			["These","Those"," This"],
																			["These","Those"," This"],
																			["These","Those"," This"],
																			["These","Those"," This"],
																			["These","Those"," This"],
																			["These","Those"," This"],
																			["These","Those"," This"],
																			["These","Those"," This"],
																			["These","Those"," This"]
																		],
													"question_type" => "multi_dual_selection",
													"question_answer" => ["These","Those","This","Those","This","These","Those","That","This","This"]
												]
											]
								],
						[
							"title"=> "Demonstrative Pronouns",
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
	echo json_encode($array);
?>