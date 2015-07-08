<?php
	$array = [
				[
					"title"=> "Phrases and Sentences",
					"instruction"=> "",
					"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
					"questions" => [
							[
								"question_text" => "I will be very happy when my son (return) <span class='answer_field'></span> home from his training.",
								"question_type" => "single_input",
								"question_answer"=>"returns"
							],
							[
								"question_text" => "Ben helped his mother (mix) <span class='answer_field'></span> the batter for the cake.",
								"question_type" => "single_input",
								"question_answer"=>"mix"
							],
							[
								"question_text" => "Adam (like) <span class='answer_field'></span> eating chocolates.",
								"question_type" => "single_input",
								"question_answer"=>"likes"
							],
							[
								"question_text" => "Jason (go) <span class='answer_field'></span> to the same school as Billy.",
								"question_type" => "single_input",
								"question_answer"=>"goes"
							],
							[
								"question_text" => "She (swim) <span class='answer_field'></span> in the lake every morning before going for work.",
								"question_type" => "single_input",
								"question_answer"=>"swims"
							],
						]

				],
				[
					"title"=> "Phrases and Sentences",
					"instruction"=> "",
					"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A sentence is a group of words which</div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent met along the corridor</li> <li>Kent and his family went to Boracay last summer.</li> <li>Kyle wants to see Boracay next year.</li> </ul></span></div>",
					"questions" => [
							[
								"question_text" => "Tim regularly (return) <span class='answer_field'></span> letters to me when he was in boarding~school",
								"question_type" => "single_input",
								"question_answer"=>"wrote"
							],
							[
								"question_text" => "The speeding car (crash) <span class='answer_field'></span> into a telephone pole last night.",
								"question_type" => "single_input",
								"question_answer"=>"crashed"
							],
							[
								"question_text" => "The students (decide) <span class='answer_field'></span> to make a collage as their art project.",
								"question_type" => "single_input",
								"question_answer"=>"decided"
							],
							[
								"question_text" => "Kate and Daniel (announce) <span class='answer_field'></span> their engagement at the party.",
								"question_type" => "single_input",
								"question_answer"=>"announced"
							],
							[
								"question_text" => "The children (wait) <span class='answer_field'></span> for the bus at the end of the secret.",
								"question_type" => "single_input",
								"question_answer"=>"waited"
							],
						]
				],
				[
					"title"=> "Simple Future Tense of Verbs",
					"description"=> "Fill in the blank with the correct simple future tense of the verb in the parenthesis to complete each sentence.",
					"questions" => [
							[
								"question_text" => "The movie (start) <span class='answer_field'></span> after fifteen minutes.",
								"question_type" => "single_input",
								"question_answer"=>"will start"
							],
							[
								"question_text" => "We (follow) <span class='answer_field'></span> the rules of the school.",
								"question_type" => "single_input",
								"question_answer"=>"will follow"
							],
							[
								"question_text" => "Mr. and Mrs. Smith (travel) <span class='answer_field'></span> to Australia next month.",
								"question_type" => "single_input",
								"question_answer"=>"will travel"
							],
							[
								"question_text" => "I (go) <span class='answer_field'></span> for a swim in the morning.",
								"question_type" => "single_input",
								"question_answer"=>"will go"
							],
							[
								"question_text" => "The farmers (sow) <span class='answer_field'></span> the seeds in the fields after the rains.",
								"question_type" => "single_input",
								"question_answer"=>"will sow"
							],
						]
				],
				[
					"title"=> "Classifying Regular and Irregular Verbs",
					"description"=> "Click the verb in each sentence. Write its past tense and tell if it is a regular verb or an irregular verb.",
					"questions" => [
							[
								"question_text" => "The book discusses ways to protect Mother Earth.",
								"question_type" => "fragment_selection_three",
								"question_choice"=> ["irregular verb","regular verb"],
								"question_answer"=>["discusses","regular verb","discussed"]
							],
							[
								"question_text" => "Julio buys a storybook.",
								"question_type" => "fragment_selection_three",
								"question_choice"=> ["irregular verb","regular verb"],
								"question_answer"=>["buys","irregular verb","bought"]
							],
							[
								"question_text" => "An organization gives lectures on how to conserve our natural resources.",
								"question_type" => "fragment_selection_three",
								"question_choice"=> ["irregular verb","regular verb"],
								"question_answer"=>["gives","irregular verb","gave"]
							],
							[
								"question_text" => "Owners of grocery stores encourage people to use eco-friendly bags while shopping.",
								"question_type" => "fragment_selection_three",
								"question_choice"=> ["irregular verb","regular verb"],
								"question_answer"=>["encourage","regular verb","encouraged"]
							],
						]
				],
				[
					"title"=> "Identifying Regular Verbs",
					"description"=> "Click the Regular verb in each sentence",
					"questions" => [
							[
								"question_text" => "I cannot believe what you just said.",
								"question_type" => "fragment_selection_single",
								"question_answer"=> "believe"
							],
							[
								"question_text" => "In this world, we enjoy freedom of expression.",
								"question_type" => "fragment_selection_single",
								"question_answer"=> "enjoy"
							],
							[
								"question_text" => "I agree, but along with freedom comes responsibility.",
								"question_type" => "fragment_selection_single",
								"question_answer"=> "agree"
							],
							[
								"question_text" => "Responsible citizens know and accept restrictions.",
								"question_type" => "fragment_selection_single",
								"question_answer"=> "accept"
							],
							[
								"question_text" => "Mary Rose shows a good example of sense of responsibility.",
								"question_type" => "fragment_selection_single",
								"question_answer"=> "shows"
							],
						]
				],
				[
					"title"=> "Forming the Post Tense of the Verbs and Dtermining whether it is Regular or Irregular.",
					"description"=> "Fill in the blank with the correct past thense of the verb in the parentheses and tell if it is a regular verb or an irregular verb.",
					"questions" => [
							[
								"question_text" => "A scary-looking man (help) <span class='answer_field'></span> him",
								"question_type" => "single_input_dual_choices",
								"question_choice"=> ["irregular","regular"],
								"question_answer"=> ["helped","regular"]
							],
							[
								"question_text" => "They (spread) <span class='answer_field'></span> their wings in the air.",
								"question_type" => "single_input_dual_choices",
								"question_choice"=> ["irregular","regular"],
								"question_answer"=> ["spread","irregular"]
							],
							[
								"question_text" => "The committee (hit) <span class='answer_field'></span> their target collection last year.",
								"question_type" => "single_input_dual_choices",
								"question_choice"=> ["irregular","regular"],
								"question_answer"=> ["hit","irregular"]
							],
							[
								"question_text" => "Mother (read) <span class='answer_field'></span> a story last night.",
								"question_type" => "single_input_dual_choices",
								"question_choice"=> ["irregular","regular"],
								"question_answer"=> ["read","irregular"]
							],
							[
								"question_text" => "The character (hurt) <span class='answer_field'></span> his best friend.",
								"question_type" => "single_input_dual_choices",
								"question_choice"=> ["irregular","regular"],
								"question_answer"=> ["hurt","irregular"]
							],
						]
				],

		];


	echo json_encode($array);
?>