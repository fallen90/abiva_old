<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Kinds of Sentences",
				"objective"=> "• Identify and classify the different kinds of sentences:  <i>declarative</i>, <i>interrogative</i>, <i>imperative</i>, and <i>exclamatory</i> sentence.<br>
								• Classify questions as<i> information questions </i>or <i>yes/no questions</i>.",
				"tutorial" => [
								[
									"title"   => "Kinds of Sentences",
									"lesson_type" => "side_tabs",
									"tab_buttons" => ["Declarative","Interrogative","Imperative","Exclamatory"],
									"tab_buttons_content" => ["A declarative sentence tell about <i>something</i>.<br>• It begins with a capital letter. <br>• It ends with a period(.) <br> Example <br>• My family went to the National Museum.<br>• I discovered that old coins were bigger and heavier than the ones we have today.",
															 "An interrogative sentence asks about something.<br>• It begins with a capital letter<br>• It ends with a question mark(?)<br>Example:<br>• What did you see there?<br>• How did they look?",
															 "An imperative sentence ask or requests someone to do something.<br>• It begins with a capital letter<br>• It ends with a period(.)<br>Example:<br>• Ask the officer in charge.<br> Please take me to the ball game.",
															 "An exclamatory sentence expresses a strong feeling or emotion.<br>• It begins with a capital letter<br>• It ends with an exclamation point(!)<br>Example:<br>• It's wonderful to hear about that!<br>• I'm leaving!"],
									"content" => "<div style='list-style-type: square;'><span><div>There are four kinds of sentences:</div> <ul> <li>declarative sentence</li><li>interrogative sentence</li><li>imperative sentence</li> <li>exclamatory sentence</li> </ul>  </span></div></p>",

								],
								[
									"title"   => "Information Question",
									"lesson_type" => "side_tabs",
									"content" => " space_in <div style='list-style-type: square;'><span><div>It is sometimes called a 'wh-question.'</div> <div>Example :</div><ul> <li>Who are you?</li> <li>Where do you live?</li>  </ul>  </span></div> space_out "
								],
								[
									"title"   => "Yes/No",
									"lesson_type" => "side_tabs",
									"content" => " space_in A yes/no question requires a yes or no answer.<br> Example: <br>Do you like apples? <br> Is the museum far from here? space_out "
								]
							],
				"activity" => [
								[
									"title"=> "Kinds of Sentences",
									"instruction"=> "Tell whether the given sentences are interrogative, imperative, exclamatory, or declarative. Click on the correct option.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Please check the key holders",
												"question_type" => "multiple_choice_dual",
												"question_choices" => ["Interrogative","Declarative","Exclamatory","Imperative"],
												"question_choices_2" => ["!",".","?"],
												"question_answer"=>"Imperative."
											],
											[
												"question_text" => "Mother packed the food and placed them in a big picnic basket",
												"question_type" => "multiple_choice_dual",
												"question_choices" => ["Interrogative","Declarative","Exclamatory","Imperative"],
												"question_choices_2" => ["!",".","?"],
												"question_answer"=>"Declarative."
											],
											[
												"question_text" => "Father made sure that the car was in perfect condition",
												"question_type" => "multiple_choice_dual_dual",
												"question_choices" => ["Interrogative","Declarative","Exclamatory","Imperative"],
												"question_choices_2" => ["!",".","?"],
												"question_answer"=>"Declarative."
											],
											[
												"question_text" => "I am afraid I lost it",
												"question_type" => "multiple_choice_dual",
												"question_choices" => ["Interrogative","Declarative","Exclamatory","Imperative"],
												"question_choices_2" => ["!",".","?"],
												"question_answer"=>"Exclamatory!"
											],
											[
												"question_text" => "Mother brought out a duplicate key from her bag",
												"question_type" => "multiple_choice_dual",
												"question_choices" => ["Interrogative","Declarative","Exclamatory","Imperative"],
												"question_choices_2" => ["!",".","?"],
												"question_answer"=>"Declarative."
											],
											
										]

								],
								[
									"title"=> "Kinds of Sentences",
									"instruction"=> "Classify the given sentences as yes/no questions or information questions. Click on the correct option.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Do you like books?",
												"question_type" => "multiple_choice",
												"question_choices" => ["Yes/No","Information"],
												"question_answer"=>"Yes/No"
											],
											[
												"question_text" => "Are you ready for your classes?",
												"question_type" => "multiple_choice",
												"question_choices" => ["Yes/No","Information"],
												"question_answer"=>"Yes/No"
											],
											[
												"question_text" => "How do you feel about studying?",
												"question_type" => "multiple_choice",
												"question_choices" => ["Yes/No","Information"],
												"question_answer"=>"Information"
											],
											[
												"question_text" => "Are you ready for the test?",
												"question_type" => "multiple_choice",
												"question_choices" => ["Yes/No","Information"],
												"question_answer"=>"Yes/No"
											],
											[
												"question_text" => "Where is the National Museum?",
												"question_type" => "multiple_choice",
												"question_choices" => ["Yes/No","Information"],
												"question_answer"=>"Information"
											],
											
										]

								],
							]
			];
	echo json_encode($array);