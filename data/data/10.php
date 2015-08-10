<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Future Tense of Verbs",
				"objective"=> "• Identify the <i>future tense of verbs</i> <br>
							   • Use the future tense correctly <br>
							    • Use the <i>correct forms of verbs</i>",
				"tutorial" => [
								[
									"title"   => "Future Tense",
									"lesson_type" => "side_tabs",
									"content" => "<div style='list-style-type: square;'><span><div>Future tense is a verb tense used to express actions expected to happen in the future.<br> </div> <p>Examples:</p> <ul> <li>Mico will travel to many places around the world.</li> <li>He will wear nice clothes and will eat delicious food.</li> <li>I shall be with him all the time.</li> <li>Together, we shall try to fulfill our dreams.</li> <li>Our firends will pray for our success.</li> </ul> </span></div>",
								],
								[
									"title"   => "Predicate",
									"lesson_type" => "side_tabs",
									"content" => " space_in The predicate of a sentence tells something about subject. It tells what subject does,did,is doing, or will be doing. <p>Example:</p><ul> <li>The two friends cut the banana plant into two.<br> What did the two friends do with the banana plant?</li>  </ul>  <ul> <li>The monkey got the top part of the plant.<br>what did the monkey do?</li>  </ul><ul> <li>The banana plant started to grow.<br>what happened to the banana plant?</li> space_out space_in </ul><p>The answers to the questions above are the predicates of the sentences.</p> <p>Cut the banana plant into two, got the top part of the plant, and started to grow tell us something about the subject.</p><p>The subject and predicate in sentences may be simple or complete.</p><ul> <li>The two friends cut the banana plant into two.<br>Simple subject: friends<br>Complete subject: The two friends<br>Simple predicate: cut<br>Complete predicate: cut thr banana plant into two</li>  </ul> space_out space_in <p>The subject and predicate in sentences may be simple or complete.</p><ul> <li>The monkey got the top part of the plant.<br>Simple subject: monkey<br>Complete subject: The monkey<br>Simple predicate: got<br>Complete predicate: got the top part of the plant</li>  </ul></span></p> space_out"
								],
							],
				"activity" => [
								[
									"title"=> "Future Tense of Verbs",
									"instruction"=> "Read the paragraph. Select the correct future tense of the verb in the parentheses. ",
									"questions" => [
												[
												"question_text" => "Jonathan is eight years old and loves to play with crayons and watercolor. He dreams of becoming an artist someday. He <div class='answer_field'></div>
												 masterpieces of landscapes and seascapes. The paintings <div class='answer_field'></div> many interesting things in nature. These <div class='answer_field'></div> messages that
												 may move people to value the natural resources. The masterpieces <div class='answer_field'></div> displayed in a gallery.												 Someday he <div class='answer_field'></div> young children to draw too. He <div class='answer_field'></div> only his best. When he turns 50 years old, he <div class='answer_field'></div>
												 the happiest man in the world.",

													"question_choices" => [
																			["paint","will paint"],
																			["will show","show"],
																			["tell","will tell"],
																			["will be ","were"],
																			["will teach","taught"],
																			["gave","will give"],
																			["will be","was"]
																		],
													"question_type" => "multi_dual_selection",
													"question_answer" => ["will paint","will show","will tell","will be","will teach","will give","will be"]
												]
											]
								],
								[
									"title"=> "Future Tense of Verbs",
									"instruction"=> "Type the correct future form of the verb in the parentheses.",
									"questions" => [
											[
												"question_text" => "Tomorrow, our teacher (teach) <div  contenteditable='true' class='answer_field' data-answer_index='1'></div> us about the three basic food groups.",
												"question_type" => "typing",
												"question_answer"=>"will teach"
											],
											[
												"question_text" => "We (bring) <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> a fruit, a slice of bread, and a vegetable.",
												"question_type" => "typing",
												"question_answer"=>"shall bring"
											],
											[
												"question_text" => "I (request) <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> my mother to buy cheese and eggs.",
												"question_type" => "typing",
												"question_answer"=>"shall request"
											],
											[
												"question_text" => "My classmates (buy) <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> other kinds of food.",
												"question_type" => "typing",
												"question_answer"=>"will buy"
											],
											[
												"question_text" => "We (group) <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> the different kinds of food after the discussion.",
												"question_type" => "typing",
												"question_answer"=>"shall group"
											],

										]

								],
								[
								"title"=> "Future Tense of Verbs",
								"instruction"=> "Type FA  if the marked verb phrase uses the future form of the verb correctly . If not, type the correct future form of the verb.",
								"questions" => [
										[
											"question_text" => "Next Friday, my parents and I <u>will went</u> to Cagayan. <br> <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
											"question_type" => "typing",
											"question_answer"=>"will go"
										],
										[
											"question_text" => "We <u>shall visit</u> my grandmother who has benn sick for several days now. <br> <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
											"question_type" => "typing",
											"question_answer"=>"FA"
										],
										[
											"question_text" => "We <u>shall take</u> a bus somewhere in Manila. <br> <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
											"question_type" => "typing",
											"question_answer"=>"FA"
										],
										[
											"question_text" => "My sister <u>will not come</u> with us. <br> <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
											"question_type" => "typing",
											"question_answer"=>"FA"
										],
										[
											"question_text" => "She <u>will preparing</u> for her upcoming board exam. <br> <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
											"question_type" => "typing",
											"question_answer"=>"will prepare"
										],
										[
											"question_text" => "I <u>shall brought</u> my books so that I can read them during my free time. <br> <div  contenteditable='true' class='answer_field' data-answer_index='6'></div>",
											"question_type" => "typing",
											"question_answer"=>"shall brought"
										],
										[
											"question_text" => "Grandmother <u>will be</u> surprised to see us. <br> <div  contenteditable='true' class='answer_field' data-answer_index='7'></div>",
											"question_type" => "typing",
											"question_answer"=>"FA"
										],
										[
											"question_text" => "I am sure she <u>will pretend</u> not to be <br> <div  contenteditable='true' class='answer_field' data-answer_index='8'></div>",
											"question_type" => "typing",
											"question_answer"=>"FA"
										],
										[
											"question_text" => "ill and <u>will appear</u> strong. <br> <div  contenteditable='true' class='answer_field' data-answer_index='9'></div>",
											"question_type" => "typing",
											"question_answer"=>"FA"
										],
										[
											"question_text" => "I know that she <u>will recover</u> soon. <br> <div  contenteditable='true' class='answer_field' data-answer_index='10'></div>",
											"question_type" => "typing",
											"question_answer"=>"FA"
										],
									]

							],
							[
									"title"=> "Future Tense of Verbs",
									"instruction"=> "Click on the correct tense of the verbs to complete the paragraph. ",
									"questions" => [
												[
												"question_text" => "Last year, our class <div class='answer_field'></div> the Ayala Museum. The place is a wonderful house of artwork. A tour guide <div class='answer_field'></div>
												each painting on the wall. We <div class='answer_field'></div> the captions under each painting. Modern artwork <div class='answer_field'></div> our attention. But we were not
												<div class='answer_field'></div> to take pictures.",

													"question_choices" => [
																			["will visit","visit","visited"],
																			["explain","explained","will explain"],
																			["read","will read","readed"],
																			["will catch ","caught","catch"],
																			["allow","allowed","will allow"]
																		],
													"question_type" => "multi_dual_selection",
													"question_answer" => ["visited","explained","read","caught","allowed"]
												]

											]
								],
				]

		];


	echo json_encode($array);
