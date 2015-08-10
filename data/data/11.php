<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Linking and Helping Verbs",
				"objective"=> "• Identify <i>linking verbs</i> and <i>helping verbs</i> <br>
							    • Use  <i>may</i> and <i>can</i> correctly",
				"tutorial" => [
								[
									"title"   => "Linking Verbs",
									"lesson_type" => "side_tabs",
									"content" => "<div><span>A <i>linking verb</i> links or connects the <i>subject</i> with an <i>adjective</i> or a <i>noun</i>.<br> </div> <p>Examples:</p> <ul> <li>The girls <i>are</i> happy with their new dresses.</li> <li>The people <i>were</i> angry at the little boy.</li> <li>The shepherd boy <i>was</i> bored with his work.</li> <li>The leader of the group <i>is</i> a man of action.</li> <li>I <i>am</i> a good person.</li>  </ul>The words <i>are, were, is, was</i>, and <i>am</i> are <i>verb forms</i>.They are called <i>be verbs.</i><br><br> They are followed by the describing words <i>happy, angry,</i> and <i>bored</i>, and by a <i>noun, man.</i>",
								],
								[
									"title"   => "Helping Verbs",
									"lesson_type" => "side_tabs",
									"content" => "<span>A <i>verb</i> that <i>comes before</i> the <i>main verb</i> in a sentence is called a <i>helping verb</i>.<br>  <p>Examples:</p> <ul> <li>The children <i>are</i> playing in the park.</li> <li>A man <i>is</i> watching over them.</li> <li>Their parents <i>are</i> sitting on the <i>benches</i>.</li> <li>Jake <i>was</i> reading a book.</li> <li>The boys <i>were</i> talking too loudly.</li>  </ul> </span>The words <i>is, are, was</i>, and <i>were</i> are followed by the verbs, <i>playing, watching, sitting, reading </i>, and <i>talking</i>.<br>",
								],
								[
									"title"   => "Using May and Can",
									"lesson_type" => "side_tabs",
									"content" => "<span> <i>May</i> is used one <i>asks for</i> or <i>gives permission.</i><br>  <p>Examples:</p> <ul> <li> <i>May</i> I borrow your book?</li> <li> Yes, you <i>may</i>.</li>  </ul>  </span><br><i>Can</i> is used when one <i>expresses</i> or  <i>shows ability to do something </i>.<br> <p>Examples:</p> <ul> <li> I <i>can</i> play the piano.</li> <li>  <i>Can</i> you finish your work soon?</li> <li> Yes, I <i>can</i>.</li>  </ul> </span>",
								],
							],
				"activity" => [
								[
									"title"=> "Linking and Helping Verbs",
									"instruction"=> "Classify each verb as a helping verb or a linking verb. Click on your answer.",
									"description"=> "<div style='list-style-type: square;'><span >div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor.</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Different animals <u>are</u> working in the farm.",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping","Linking"],
												"question_answer"=>"Helping"
											],
											[
												"question_text" => "The carabao <u>is</u> the most helpful of all.",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping","Linking"],
												"question_answer"=>"Linking"
											],
											[
												"question_text" => "Goats and cows <u>are</u> animals that are useful to the farmers.",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping","Linking"],
												"question_answer"=>"Linking"
											],
											[
												"question_text" => "They <u>are</u> doing their best to make the work of the farmers easier.",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping","Linking"],
												"question_answer"=>"Helping"
											],
											[
												"question_text" => "Children <u>are</u> kind to these animals.",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping","Linking"],
												"question_answer"=>"Linking"
											],


										]

								],
								[
									"title"=> "Linking and Helping Verbs",
									"instruction"=> "Tell whether each verb is a helping verb or a linking verb. Click on your answer.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor.</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "am talking",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Helping Verb"
											],
											[
												"question_text" => "are smart",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Linking Verb"
											],
											[
												"question_text" => "is responsible",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Linking Verb"
											],
											[
												"question_text" => "was walking",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Helping Verb"
											],
											[
												"question_text" => "were helpful",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Linking Verb"
											],
											[
												"question_text" => "was reciting",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Helping Verb"
											],
											[
												"question_text" => "was kind and generous",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Linking Verb"
											],
											[
												"question_text" => "is responsible",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Linking Verb"
											],
											[
												"question_text" => "was walking back and forth",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Helping Verb"
											],
											[
												"question_text" => "is eating",
												"question_type" => "dual_selection",
												"question_choices" => ["Helping Verb","Linking Verb"],
												"question_answer"=>"Helping Verb"
											],

										]

								],

								[
									"title"=> "Linking and Helping Verbs",
									"instruction"=> "Write <i>may</i> or can in each blank to complete the thought of the dialog.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "
												<i>Bryan</i>: Mother, <div  contenteditable='true' class='answer_field' data-answer_index='1'></div> I watch the concert of my favorite singer in Araneta Coliseum?<br>

												<i>Mother</i>: No, you <div  contenteditable='true' class='answer_field' data-answer_index='2'></div> not. You <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> just
												 watch the concert when it is shown on television.<br>

												<i>Bryan</i>: But, Mother, I <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> go with my friends.<br>

												<i>Mother</i>: Do not be silly, Bryan. You <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> only watch concerts like that together
												with your brothers and sisters.<br>

												<i>Bryan</i>: All right, Mom. But <div  contenteditable='true' class='answer_field' data-answer_index='6'></div> I ask Dad's permission?<br>

												<i>Mother</i>: Okay. You <div  contenteditable='true' class='answer_field' data-answer_index='7'></div> ask him but do not fret if he does not allow
												you to go.<br>

												<i>Bryan</i>: Dad, <div  contenteditable='true' class='answer_field' data-answer_index='8'></div> I go to the concert with my friends? <br>

												<i>Father</i>: No, Bryan, you <div  contenteditable='true' class='answer_field' data-answer_index='10'></div> not watch concerts with your
												friends today but you <div  contenteditable='true' class='answer_field' data-answer_index='11'></div> in the future.

												",
												"question_type" => "typing_paragraph",
												"question_answer"=>["may","can","can","can","can","may","may","may","can","may"]
											]

										]

								],
				]

		];


	echo json_encode($array);
