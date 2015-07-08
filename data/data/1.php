<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Phrases and Sentences",
				"objective"=> "• Differentiate a <i>phrase</i> from a <i>sentence</i>",
				"tutorial" => [
								[
									"title"   => "Phrase",
									"lesson_type" => "side_tabs",
									"content" => " space_in A phrase is a group of words, which does not <ul> <li>have a <em><b>complete</b> <b>thought</b></em></li> <li>begin with a <em><b>capital</b> <b>letter</b></em></li> <li>end with a <em><b>period</b></em>, an <em><b>exclamation</b> <b>point,</b> </em>or a <em><b>question</b> <b>mark</b></em></li> </ul> <p>Examples:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul> space_out"
								],
								[
									"title"   => "Sentence",
									"lesson_type" => "side_tabs",
									"content" => " space_in A sentence is a group of words which <ul> <li>has a <em><b>complete</b> <b>thought</b></em></li> <li>begins with a <em><b>capital</b> <b>letter</b></em></li> <li>ends with a <em><b>period</b></em>, an <em><b>exclamation</b> <b>point,</b> </em>or a <em><b>question</b> <b>mark</b></em></li> </ul> <p>Examples:</p> <ul> <li>Kyle and Kent met along the corridor.</li> <li>Kent and his family went to Boracay last summer.</li> <li>Kyle wants to see Boracay next year.</li> </ul> space_out"
								]
							],
				"activity" => [
								[
									"title"=> "Phrases and Sentences",
									"instruction"=> "Tell whether each group of words is a sentence or a phrase. Click on the correct option.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><b>complete</b> <b>thought</b></em></li> <li>begins with a <em><b>capital</b> <b>letter</b></em></li> <li>ends with a <em><b>period</b></em>, an <em><b>exclamation</b> <b>point</b> </em>or a <em><b>question</b> <b>mark</b></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor.</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "We went to Boracay.",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "Manila is the capital of the philippines.",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "It is a good exercise for the lungs.",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "a paradise to every tourist",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "a good exercise is",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "Filipinos are friendly people",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "in a beach",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "an interesting place",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "through the town",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "Swimming is fun",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "Last year, we went swimming in one of the best beaches in the Philippines",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "I enjoyed playing on the white sands of the beach",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "in the middle of the ocean",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "long coastline",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "my best friend and i",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "The Philippines consists of 7107 islands",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "Snorkelling is a popular activity in Boracay",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "It has a tropical climate",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Sentence"
											],
											[
												"question_text" => "up the hill",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
											[
												"question_text" => "on sandy beaches",
												"question_type" => "dual_selection",
												"question_choices" => ["Phrase","Sentence"],
												"question_answer"=>"Phrase"
											],
										]
								],
								[
									"title"=> "Phrases and Sentences",
									"instruction"=> "Arrange each group of words to form a sentence. Click on each word.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><b>complete</b> <b>thought</b></em></li> <li>begins with a <em><b>capital</b> <b>letter</b></em></li> <li>ends with a <em><b>period</b></em>, an <em><b>exclamation</b> <b>point</b> </em>or a <em><b>question</b> <b>mark</b></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "reached/boys/The/late/home/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"The boys reached home late ."
											],
											[
												"question_text" => "traffic/jam/friend/in/My/a/caught/got/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"My friend got caught in a traffic jam ."
											],
											[
												"question_text" => "climbing/is/Mountain/fun/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"Mountain climbing is fun ."
											],
											[
												"question_text" => "doctor/is/His/father/a/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"His father is a doctor ."
											],
											[
												"question_text" => "test/marks/Ann/good/in/got/the/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"Ann got good marks in the test ."
											],
											[
												"question_text" => "in/farmer/The/works/field/th/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"The farmer works in the field ."
											],
											[
												"question_text" => "books/like/I/reading/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"I like reading books ."
											],
											[
												"question_text" => "the/planted/trees/children/along/streets/The/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"The children planted trees along the streets ."
											],
											[
												"question_text" => "exercise/is/kind/of/Walking/a/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"Walking is a kind of exercise ."
											],
											[
												"question_text" => "Tina/every/day/her/lessons/studies/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"Tina studies her lessons every day ."
											],
											[
												"question_text" => "policeman/a/The/thief/caught/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"The policeman caught the thief ."
											],
											[
												"question_text" => "poems/like/I/writing/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"I like writing poems ."
											],
											[
												"question_text" => "solved/detective/The/difficult/case/a.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"The detective solved a case ."
											],
											[
												"question_text" => "dog/child/The/the/protected/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"The child protected the dog ."
											],
											[
												"question_text" => "pictures/paints/artist/The/beautiful/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"The artist paints beautiful pictures ."
											],
											[
												"question_text" => "are/They/now/quite/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"They are now quite ."
											],
											[
												"question_text" => "cold/It/very/today/is/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"It is very cold today ."
											],
											[
												"question_text" => "playing/I/football/am/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"I am playing footbal ."
											],
											[
												"question_text" => "holiday/is/Tomorrow/a/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"Tomorrow is a holiday ."
											],
											[
												"question_text" => "a/sandcastle/is/Tim/making/.",
												"question_type" => "sentence_fragment",
												"question_answer"=>"Tim is making a sandcastle ."
											],

										]
								],
								[
									"title"=> "Phrases and Sentences",
									"instruction"=> "Match the phrases to form sentences. Drag and drop each of the phrases on the left into the correct box.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><b>complete</b> <b>thought</b></em></li> <li>begins with a <em><b>capital</b> <b>letter</b></em></li> <li>ends with a <em><b>period</b></em>, an <em><b>exclamation</b> <b>point</b> </em>or a <em><b>question</b> <b>mark</b></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
										[
											"question_text" => "She loves visiting",
											"question_type" => "dragndrop",
											"question_choice" => "playing in the fields.",
											"question_answer"=>"her cousins in the village."
										],
										[
											"question_text" => "She enjoys",
											"question_type" => "dragndrop",
											"question_choice" => "in a big city.",
											"question_answer"=>"playing in the fields."
										],
										[
											"question_text" => "Ruth lived",
											"question_type" => "dragndrop",
											"question_choice" =>"her cousins in the village.",
											"question_answer"=>"in a big city."
										],
										[
											"question_text" => "We enjoyed",
											"question_type" => "dragndrop",
											"question_choice" => "the parade during the festival.",
											"question_answer"=>"watching the city's Panag-benga Festival."
										],
										[
											"question_text" => "My sister and I joined",
											"question_type" => "dragndrop",
											"question_choice" =>"was a big change from Manila's heat.",
											"question_answer"=>"the parade during the festival."
										],
										[
											"question_text" => "Our family went",
											"question_type" => "dragndrop",
											"question_choice" => "on a vacation to Baguio City.",
											"question_answer"=>"on a vacation to Baguio City."
										],
										[
											"question_text" => "She does not",
											"question_type" => "dragndrop",
											"question_choice" => "misses the city life.",
											"question_answer"=>"misses the city life."
										],
										[
											"question_text" => "Her cousins",
											"question_type" => "dragndrop",
											"question_choice" =>"like the noise and pollution in the city.",
											"question_answer"=>"like the noise and pollution in the city."
										],
										[
											"question_text" => "The city's cool weather",
											"question_type" => "dragndrop",
											"question_choice" =>"watching the city's Panag-benga festival.",
											"question_answer"=>"was a big change from Manila's heat."
										],


										]
								],
							]
			];
	echo json_encode($array);
