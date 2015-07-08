<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Subjects and Predicates",
				"objective"=> "• Identify <i>subjects</i> and <i>predicates</i></br>
									 • Differentiate <i>subjects</i> from <i>predicates</i></br>
									 • Identify <i>simple</i> and <i>complete</i> subjects and predicates",
				"tutorial" => [
								[
									"title"   => "Subject",
									"lesson_type" => "side_tabs",
									"content" => " space_in A sentence has two parts <ul>  <li><em><strong>subject</strong> </em></li> <li><em><strong>predicate</strong></em></li> </ul> <p>The subject of a sentence is the person, place, event, idea, or thing being spoken about.</p> <p>They answer the questions:</p><ul> <li>who is being spoken about in a sentence</li> <li>What is being spoken about in a sentence</li> </ul>  space_out  space_in <p>Examples:</p><ul><li>The two friends cut the banana plant into two.<br> Who cut the banana plant into two?</li><li>The monkey got the top part of the plant.<br>Who got the top of the plant?</li><li>The banana plant started to grow.<br>What start to grow?</li></ul><p>The answer to the question above are the subjects of the sentences.</p>  <p>The two friends, the monkey, the banana plant are the subjects spoken about in the sentences</p></span> space_out "
								],
								[
									"title"   => "Predicate",
									"lesson_type" => "side_tabs",
									"content" => " space_in The predicate of a sentence tells something about subject. It tells what subject does,did,is doing, or will be doing. <p>Example:</p><ul> <li>The two friends cut the banana plant into two.<br> What did the two friends do with the banana plant?</li>  </ul>  <ul> <li>The monkey got the top part of the plant.<br>what did the monkey do?</li>  </ul><ul> <li>The banana plant started to grow.<br>what happened to the banana plant?</li> space_out space_in </ul><p>The answers to the questions above are the predicates of the sentences.</p> <p>Cut the banana plant into two, got the top part of the plant, and started to grow tell us something about the subject.</p><p>The subject and predicate in sentences may be simple or complete.</p><ul> <li>The two friends cut the banana plant into two.<br>Simple subject: friends<br>Complete subject: The two friends<br>Simple predicate: cut<br>Complete predicate: cut thr banana plant into two</li>  </ul> space_out space_in <p>The subject and predicate in sentences may be simple or complete.</p><ul> <li>The monkey got the top part of the plant.<br>Simple subject: monkey<br>Complete subject: The monkey<br>Simple predicate: got<br>Complete predicate: got the top part of the plant</li>  </ul></span></p> space_out"
								],
							],
				"activity" => [
								[
									"title"=> "Subjects and Predicates",
									"instruction"=> "Tell if the underlined word is the subject or the predicate of the sentence. Click on the correct option.",
									"description"=> "<div style='list-style-type: square'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Examples:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Lyla <u>reads</u> books on mysteries and adventures.",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Predicate"
											],
											[
												"question_text" => "Her brother <u>drives</u> a new, red car.",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Predicate"
											],
											[
												"question_text" => "Her younger sister <u>practices</u> ballet every Saturday.",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Predicate"
											],
											[
												"question_text" => "The <u>family</u> loves going out of the swim",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Subject"
											],
											[
												"question_text" => "They <u>keep</u> a diary of all the adventures they have had.",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Predicate"
											],
											[
												"question_text" => "David <u>plays</u> the piano",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Predicate"
											],
											[
												"question_text" => "The lion <u>roared.</u>",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Predicate"
											],
											[
												"question_text" => "<u>The girl in the blue dress</u> arrived late",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Subject"
											],
											[
												"question_text" => "<u>The house</u> is white.",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Subject"
											],
											[
												"question_text" => "<u>The teacher</u> likes students.",
												"question_type" => "dual_selection",
												"question_choices" => ["Subject","Predicate"],
												"question_answer"=>"Subject"
											],

										]
								],
								[
									"title"=> "Subjects and Predicates",
									"instruction"=> "Separate the complete subject from the complete predicate in the sentence. Put a bar (/) between them.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='1'>The monkey and the turtle went for a walk.</div>",
												"question_type" => "typing_sentence",
												"question_answer"=>"The monkey and the turtle/ went for a walk."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='2'>They found a banana plant along the riverbank.</div>",
												"question_type" => "typing_sentence",
												"question_answer"=>"They/ found a banana plant along the riverbank."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='3'>They decided to cut the plant into two.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=>"They/ decided to cut the plant into two."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='4'>The monkey wanted the top part of the plant.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=> "The monkey/ wanted the top part of the plant."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='5'>The turtle asked for the lower part of the plant.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=> "The turtle/ asked for the lower part of the plant."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='1'>Both of them planted their parts of the plant in their respective places..</div>",
												"question_type" => "typing_sentence",
												"question_answer"=>"Both of them/ planted their parts of the plant in their respective places."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='2'>The turtle found his plant tall and healthy.</div>",
												"question_type" => "typing_sentence",
												"question_answer"=>"The turtle/ found his plant tall and healthy."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='3'>The monkey's plant withered and died.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=>"The monkey's plant/ withered and died."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='4'>The monkey became very sad.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=> "The monkey/ became very sad."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='5'>The turtle shared the fruits of the plant with his friend.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=> "The turtle/ shared the fruits of the plant with his friend."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='1'>The horse ran in the field.</div>",
												"question_type" => "typing_sentence",
												"question_answer"=>"The horse/ ran in the field.."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='2'>The people in the house are having a party.</div>",
												"question_type" => "typing_sentence",
												"question_answer"=>"The people in the house/ are having a party."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='3'>Mom asked me to go to the store.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=>"Mom/ asked me to go to the store."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='4'>Jayson's brother bought a new car.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=> "Jayson's brother/ bought a new car."
											],
											[
												"question_text" => "<div contenteditable='true' class='answer_field' data-answer_index='5'>Dick likes to play volleyball.</div> ",
												"question_type" => "typing_sentence",
												"question_answer"=> "Dick/ likes to play volleyball."
											],
										]

								],
								[
									"title"=> "Subjects and Predicates",
									"instruction"=> "Type under the correct heading the simple subject and the simple predicate of each sentence.",
									"description"=> "<div style='list-style-type: square'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Both of them planted their parts of the plant in their respective places.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='1'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='1'></div></div> ",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"Both of them "," planted their parts of the plant in their respective places"
											],
											[
												"question_text" => "The turtle found his plant tall and healthy.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> </div>",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"The turtle "," found his plant tall and healthy"
											],
											[
												"question_text" => "The monkey's plant withered and died.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> </div>",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"The monkey's plant "," withered and died"
											],
											[
												"question_text" => "The monkey became very sad.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> </div>",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"The monkey "," became very sad"
											],
											[
												"question_text" => "The turtle shared the fruits of the plant with his friend.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> </div>",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"The turtle "," shared the fruits of the plant with his friend"
											],
 											[
												"question_text" => "The monkey and the turtle went for a walk.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='1'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='1'></div></div> ",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"The monkey and the turtle ","went for a walk"
											],
											[
												"question_text" => "The turtle swim deep to the ocean.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> </div>",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"The turtle ","swim deep to the ocean"
											],
											[
												"question_text" => "They found a banana plant along the riverbank.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> </div>",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"a banana plant along the riverbank","They found"
											],
											[
												"question_text" => "They decided to cut the plant into.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> </div>",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"the pant","cut"
											],
											[
												"question_text" => "The monkey wanted the top part of the plant.<br>
												<div class='answer_container'>Simple Subject: <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> <br>
												Simple Predicate: <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> </div>",
												"question_type" => "typing_multiple_v2",
												"question_answer"=>"The monkey","wanted the top part of the plant"
											],

										]

								],
								[
									"title"=> "Subjects and Predicates",
									"instruction"=> "Click on the correct predicate that completes the given sentences.",
									"description"=> "<div style='list-style-type: square'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
											"question_text" => "<div class='answer_field'></div> played hide-and-seek. ",
												"question_type" => "multiple_choice",
												"question_choices" => ["Mario and his friends","Seeing no one, he","went hiding behind the mango trees","Everybody","covered his face and started counting"],
												"question_answer"=>"Mario and his friends"
											],
											[
											"question_text" => " Mario, being the it<div class='answer_field'></div>",
												"question_type" => "multiple_choice",
												"question_choices" => ["Mario and his friends","Seeing no one, he","went hiding behind the mango trees","Everybody","covered his face and started counting"],
												"question_answer"=>"covered his face and started counting"
											],
											[
											"question_text" => "Some of his playmates <div class='answer_field'></div> ",
												"question_type" => "multiple_choice",
												"question_choices" => ["Mario and his friends","Seeing no one, he","went hiding behind the mango trees","Everybody","covered his face and started counting"],
												"question_answer"=>"went hiding behind the mango trees"
											],
											[
											"question_text" => " <div class='answer_field'></div> suddenly shouted at the top of his voice. ",
												"question_type" => "multiple_choice",
												"question_choices" => ["Mario and his friends","Seeing no one, he","went hiding behind the mango trees","Everybody","covered his face and started counting"],
												"question_answer"=>"Seeing no one, he"
											],
											[
											"question_text" => "came out from their hiding places, laughing. <div class='answer_field'></div>",
												"question_type" => "multiple_choice",
												"question_choices" => ["Mario and his friends","Seeing no one, he","went hiding behind the mango trees","Everybody","covered his face and started counting"],
												"question_answer"=>"Everybody"
											],

										]

								],
							]
			];
	echo json_encode($array);
