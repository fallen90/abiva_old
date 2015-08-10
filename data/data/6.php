<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Gender of Nouns",
				"objective"=> "• Identify the <i>gender of nouns</i><br>
							   • Name the <i>feminine</i> or <i>masculine form of nouns</i><br>
							   • Classify the given nouns according to gender. Click on the correct option.",
				"tutorial" => [
								[
									"title"   => "Types of Gender",
									"lesson_type" => "side_tabs",
									"tab_buttons" => ["Neuter Gender","Common Gender","Feminine Gender","Masculine Gender"],
									"tab_buttons_content" => ["Nouns that refer to lifeless things or nonliving things and plants are in the neuter gender. <br> Example: <br> • Zoo, Pond <br> • Branches, Cage <br> • Stable, Plants",
															 "Nouns that refer to either males or females are in the common gender. <br> Example: <br> • Visitors, Ducks <br> • Monkeys, Tiger, <br> • Cub, Snake, Birds <br> • Rabbit, Animals, <br> • People, Children",
															 "Nouns that refer to females are in the feminine gender. <br> Example: <br> • Mothers <br> • Women <br> • Girls <br> • Lady",
															 "Nouns that refer to males are in the masculine gender. <br> Example:<br> • Fathers<br> • Men<br> • Boys <br> • Stallion"],

									"content" => " <span>A <em><b>Nouns are classified into four genders</b></em> refers to <em><b>two or more.</b></em> <ul> <li> <em><b>Masculine gender</b></em> </li> <li> <em><b>Feminine gender</b></em></li> <li><em><b>Common gender</b></em></li> <li> <em><b>Neuter gender</b></em></li> </ul> </div></span> ",
								],
								[
									"title"   => "Note",
									"lesson_type" => "side_tabs",
									"content" => "Masculine gender and feminine gender apply to both people and animals.
									<table border='1' width='100%'>
										<tr>
											<th>Common</th>
											<th>Feminine</th>
											<th>Masculine</th>
										</tr>

										<tr>
											<td>chicken</td>
											<td>hen</td>
											<td>rooster</td>
										</tr>

										<tr>
											<td>pig</td>
											<td>sow</td>
											<td>boar</td>
										</tr>

										<tr>
											<td>duck</td>
											<td>duck</td>
											<td>drake</td>
										</tr>

										<tr>
											<td>horse</td>
											<td>mare</td>
											<td>stallion</td>
										</tr>

										<tr>
											<td>deer</td>
											<td>doe</td>
											<td>stag</td>
										</tr>

									</table>"
								]
							  ],
				"activity" => [
								[
									"title"=> "Gender of Nouns",
									"instruction"=> "Identify the masculine and feminine forms of the nouns given. Type your answer in the space provided.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Common : horse <br>
												Masculine: <div  contenteditable='true' class='answer_field' data-answer_index='1' '></div><br>
												Feminine: <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing_multiple",
												"question_answer"=>" stallion mare"
											],
											[
												"question_text" => "Common : deer <br>
												Masculine: <div  contenteditable='true' class='answer_field' data-answer_index='2'></div><br>
												Feminine: doe",
												"question_type" => "typing_multiple",
												"question_answer"=>" stag"
											],
											[
												"question_text" => "Common : pig <br>
												Masculine: <div  contenteditable='true' class='answer_field' data-answer_index='3'></div><br>
												Feminine: <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing_multiple",
												"question_answer"=>" boar sow"
											],
											[
												"question_text" => "Common : duck <br>
												Masculine: drake <br>
												Feminine: <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing_multiple",
												"question_answer"=>"duck"
											],
											[
												"question_text" => "Common : chicken <br>
												Masculine: <div  contenteditable='true' class='answer_field' data-answer_index='5'></div><br>
												Feminine: hen",
												"question_type" => "typing_multiple",
												"question_answer"=>"rooster"
											],

										]

								],
								[
									"title"=> "Gender of Nouns",
									"instruction"=> "Type the masculine and feminine forms of the given nouns.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Waiter - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"waitress"
											],
											[
												"question_text" => "Seamstress - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"seamster"
											],
											[
												"question_text" => "Son - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"daughter"
											],
											[
												"question_text" => "Mother - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"father"
											],
											[
												"question_text" => "Witch - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"wizard"
											],
											[
												"question_text" => "Mister - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"mistress"
											],
											[
												"question_text" => "Niece - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"nephew"
											],
											[
												"question_text" => "Prince - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"princess"
											],
											[
												"question_text" => "Bride - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"groom"
											],
											[
												"question_text" => "Lady - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"lord"
											],
											[
												"question_text" => "Men - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"women"
											],
											[
												"question_text" => "Emperor - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"empress"
											],
											[
												"question_text" => "Brother - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"sister"
											],
											[
												"question_text" => "Wife - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"husband"
											],
											[
												"question_text" => "Priest - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"Nun"
											],
										]

								],
								[
									"title"=> "Gender of Nouns",
									"instruction"=> "Click on the word which refers to a different gender.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "",
												"question_type" => "multiple_choice",
												"question_choices" => ["lady","niece","empress","tailor"],
												"question_answer"=>"tailor"
											],
											[
												"question_text" => "",
												"question_type" => "multiple_choice",
												"question_choices" => ["paper","priest","car","crayon"],
												"question_answer"=>"priest"
											],
											[
												"question_text" => "",
												"question_type" => "multiple_choice",
												"question_choices" => ["deer","chicken","mare","pig"],
												"question_answer"=>"mare"
											],
											[
												"question_text" => "",
												"question_type" => "multiple_choice",
												"question_choices" => ["man","parents","baby","spouse"],
												"question_answer"=>"man"
											],
											[
												"question_text" => "",
												"question_type" => "multiple_choice",
												"question_choices" => ["duke","husband","heiress","gentleman"],
												"question_answer"=>"heiress"
											],

										]

								],
								[
								"title"=> "Gender of Nouns",
								"instruction"=> "Classify the nouns given according to gender. Click on the correct option.",
								"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
								"questions" => [
										[
											"question_text" => "Magician",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"common"
										],
										[
											"question_text" => "Pencil",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"neuter"
										],
										[
											"question_text" => "Conductor",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"masculine"
										],
										[
											"question_text" => "Heroine",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"feminine"
										],
										[
											"question_text" => "Steward",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"masculine"
										],
										[
											"question_text" => "King",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"masculine"
										],
										[
											"question_text" => "Aunt",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"feminine"
										],
										[
											"question_text" => "Tree",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"neuter"
										],
										[
											"question_text" => "Queen",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"feminine"
										],
										[
											"question_text" => "Host",
											"question_type" => "dual_selection",
											"question_choices" => ["masculine","feminine","common","neuter"],
											"question_answer"=>"masculine"
										],
									]

							],

							]
			];
	echo json_encode($array);
