<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Verbs",
				"objective"=> "• Identify <i>action words</i><br>
							   • Use appropriate <i>action words</i> <br>
							   • Use <i>be</i> words properly",
				"tutorial" => [
								[
									"title"   => "Action Words or Verbs",
									"lesson_type" => "side_tabs",
									"content" => "<span>Words that denote action are called action words or verbs.<p>Examples</p><ul> <li>An old man lives in the forest. <br> It tells us about the old man in the forest.</li><li>A dwarf helps the old man. <br> It tells us what the dwarf does.</li> <li>The old man cuts wood for a living. <br> It tells us what the old man does for a living.</li><li>The words <i>lives</i>, <i>helps</i>, and <i>cuts</i> denote action.</li></ul> </span>",
								],
								[
									"title"   => "Be Verbs",
									"lesson_type" => "side_tabs",
									"content" => "<span>The word is, am, and are forms of be verbs.<p>Examples</p> <ul> <li>The forest <i>is</i> the old man's favorite place.</li> <li>I <i>am</i> his special friend.</li> <li>The trees in the forest <i>are</i> green; <br> the rivers in it <i>are</i> clean.</li> </ul> <p>The words <i>is</i>, <i>am</i>, and <i>are</i> do not show action. <br> They show a state of being. They are called <i>be verbs</i></p></span>",
								]
							],

				"activity" => [
								[
									"title"=> "Verbs",
									"instruction"=> " Click on the action word in the given sets of words.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["pray","walk","talk","eat","bulb"],
												"question_answer"=>"bulb"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["faucet","step","strike","swim","float"],
												"question_answer"=>"faucet"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["feel","freeze","folders","break","run"],
												"question_answer"=>"folders"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["read","spell","recite","girl","make"],
												"question_answer"=>"girl"
											],
											[
												"question_text" => "",
												"question_type" => "sentence_fragment",
												"question_choices" => ["drink","sing","open","medicine","copy"],
												"question_answer"=>"medicine"
											],





											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["doctors","find","cathch","buy","choose"],
												"question_answer"=>"doctors"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["hear","take","see","notebooks","join"],
												"question_answer"=>"notebooks"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["clean","bring","car","look","catch"],
												"question_answer"=>"car"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["heart","call","need","listen","go"],
												"question_answer"=>"heart"
											],
											[
												"question_text" => "",
												"question_type" => "sentence_fragment",
												"question_choices" => ["think","animal","watch","pick","sing"],
												"question_answer"=>"animal"
											],

										]

								],
								[
									"title"=> "Verbs",
									"instruction"=> "Click on the correct action word for each phrase.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "<div class='answer_field'></div> the yoyo",
												"question_type" => "pool_of_words",
												"question_choices" => ["play","drink","carry","climb","clean"],
												"question_answer"=>"play"
											],
											[
												"question_text" => "<div class='answer_field'></div> the mountain",
												"question_type" => "pool_of_words",
												"question_choices" => ["play","drink","carry","climb","clean"],
												"question_answer"=>"climb"
											],
											[
												"question_text" => "<div class='answer_field'></div> the heavy bag",
												"question_type" => "pool_of_words",
												"question_choices" => ["play","drink","carry","climb","clean"],
												"question_answer"=>"carry"
											],
											[
												"question_text" => "<div class='answer_field'></div> a glass of milk",
												"question_type" => "pool_of_words",
												"question_choices" => ["play","drink","carry","climb","clean"],
												"question_answer"=>"drink"
											],
											[
												"question_text" => "<div class='answer_field'></div> the room",
												"question_type" => "pool_of_words",
												"question_choices" => ["play","drink","carry","climb","clean"],
												"question_answer"=>"clean"
											],




											[
												"question_text" => "<div class='answer_field'></div> the grass",
												"question_type" => "pool_of_words",
												"question_choices" => ["cut","watch","read","cheack","hear"],
												"question_answer"=>"cut"
											],
											[
												"question_text" => "<div class='answer_field'></div> the mail",
												"question_type" => "pool_of_words",
												"question_choices" => ["cut","watch","read","cheack","hear"],
												"question_answer"=>"check"
											],
											[
												"question_text" => "<div class='answer_field'></div> the book",
												"question_type" => "pool_of_words",
												"question_choices" => ["cut","watch","read","cheack","hear"],
												"question_answer"=>"read"
											],
											[
												"question_text" => "<div class='answer_field'></div> a movie",
												"question_type" => "pool_of_words",
												"question_choices" => ["cut","watch","read","cheack","hear"],
												"question_answer"=>"watch"
											],
											[
												"question_text" => "<div class='answer_field'></div> a secret",
												"question_type" => "pool_of_words",
												"question_choices" => ["cut","watch","read","cheack","hear"],
												"question_answer"=>"hear"
											],

										]

								],
								[
									"title"=> "Verbs",
									"instruction"=> "Click on the correct Be Verb to complete the sentence.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Stephen <div  contenteditable='true' class='answer_field' data-answer_index='1'></div> our class president.",
												"question_type" => "typing",
												"question_answer"=>"is"
											],
											[
												"question_text" => "Two of the girls <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> peace officers.",
												"question_type" => "typing",
												"question_answer"=>"are"
											],
											[
												"question_text" => "I <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> present in the class meeting.",
												"question_type" => "typing",
												"question_answer"=>"am"
											],
											[
												"question_text" => "My classmates <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> obedient to the rules and regulations of our school.",
												"question_type" => "typing",
												"question_answer"=>"are"
											],
											[
												"question_text" => "Our teacher <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> proud to have a class of responsible pupils.",
												"question_type" => "typing",
												"question_answer"=>"is"
											],



											[
												"question_text" => "I <div  contenteditable='true' class='answer_field' data-answer_index='1'></div> totally fascinated with dogs.",
												"question_type" => "typing",
												"question_answer"=>"am"
											],
											[
												"question_text" => "They <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> likable and huggable creatures.",
												"question_type" => "typing",
												"question_answer"=>"are"
											],
											[
												"question_text" => "A St. Bernard <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> some movies in which dogs are the main characters..",
												"question_type" => "typing",
												"question_answer"=>"is"
											],
											[
												"question_text" => "There <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> obedient to the rules and regulations of our school.",
												"question_type" => "typing",
												"question_answer"=>"are"
											],
											[
												"question_text" => "Dogs <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> man's best friends.",
												"question_type" => "typing",
												"question_answer"=>"are"
											],

										]

								],
								[
								"title"=> "Verbs",
								"instruction"=> "Click on the correct Be Verb that agrees with the subject.",
								"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
								"questions" => [
										[
											"question_text" => "I<div class='answer_field'></div>a grade 3 pupil.",
											"question_type" => "dual_selection",
											"question_choices" => ["is","are","am"],
											"question_answer"=>"is"
										],
										[
											"question_text" => "Mrs. De los Santos<div class='answer_field'></div>my Language teacher.",
											"question_type" => "dual_selection",
											"question_choices" => ["is","are","am"],
											"question_answer"=>"are"
										],
										[
											"question_text" => "Most of my friends<div class='answer_field'></div>diligent pupils.",
											"question_type" => "dual_selection",
											"question_choices" => ["is","are","am"],
											"question_answer"=>"are"
										],
										[
											"question_text" => "They<div class='answer_field'></div>also good badminton players.",
											"question_type" => "dual_selection",
											"question_choices" => ["is","are","am"],
											"question_answer"=>"are"
										],
										[
											"question_text" => "Our class<div class='answer_field'></div>lucky to have a caring adviser.",
											"question_type" => "dual_selection",
											"question_choices" => ["is","are","am"],
											"question_answer"=>"is"
										],
										[
											"question_text" => "I<div class='answer_field'></div> proud of her.",
											"question_type" => "dual_selection",
											"question_choices" => ["am", "is"],
											"question_answer"=>"am"
										],
										[
											"question_text" => "My father<div class='answer_field'></div> a responsible man.",
											"question_type" => "dual_selection",
											"question_choices" => ["are", "is"],
											"question_answer"=>"is"
										],
										[
											"question_text" => "He<div class='answer_field'></div> a computer engineer",
											"question_type" => "dual_selection",
											"question_choices" => ["is","are"],
											"question_answer"=>"is"
										],
										[
											"question_text" => "We<div class='answer_field'></div> happy to have a wonderful family.",
											"question_type" => "dual_selection",
											"question_choices" => ["are", "is"],
											"question_answer"=>"are"
										],
										[
											"question_text" => "My mom<div class='answer_field'></div> a very loving mother.",
											"question_type" => "dual_selection",
											"question_choices" => ["are","is"],
											"question_answer"=>"is"
										],

									]

							],
							[
									"title"=> "Forming Verbs",
									"instruction"=> "Decode the symbols below to complete the poem. Refer to the legend. Write each word on the line.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "When we (• ○ ▬ ♣) <div  contenteditable='true' class='answer_field' data-answer_index='1'></div> to the poor.",
												"question_type" => "typing_decode",
												"question_answer"=>"give"
											],
											[
												"question_text" => "We ( ◘ ♣ ♀ ►) <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> them have more. ",
												"question_type" => "typing_decode",
												"question_answer"=>"help"
											],
											[
												"question_text" => "When we ( ♥ ☺ ↕ ♣) <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> for the sick.",
												"question_type" => "typing_decode",
												"question_answer"=>"care"
											],
											[
												"question_text" => "We  ( ☻ ↕ ○ ♫ • ) <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> them smile in a tick.",
												"question_type" => "typing_decode",
												"question_answer"=>"bring"
											],
											[
												"question_text" => "When we ( ♠ ♣ ♣ ♦) <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> the hungry.",
												"question_type" => "typing_decode",
												"question_answer"=>"feed"
											],



											[
												"question_text" => "And (• ○ ▬ ♣) <div  contenteditable='true' class='answer_field' data-answer_index='1'></div> drink to the thirsty.",
												"question_type" => "typing_decode",
												"question_answer"=>"give"
											],
											[
												"question_text" => "We ( ◘ ♣ ♀ ►) <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> this world a better place to behold.",
												"question_type" => "typing_decode",
												"question_answer"=>"make"
											],


										]

								],

							]
			];
	echo json_encode($array);
