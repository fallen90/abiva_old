<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Number of Nouns",
				"objective"=> "• Identify the <i>number of nouns</i><br>
									  • Form the <i>plural of nouns</i>",
				"tutorial" => [
									[
										"title"   => "Singular Noun",
										"lesson_type" => "side_tabs",
										"tab_buttons" => [],
										"tab_buttons_content" => [],
										"content" => " space_in <span><div>A <em><strong>singular noun</strong></em> refers to <em><strong>only one.</strong></em> <p>Example:</p><ul> <li> <em><strong>Tiger</strong></em> </li> <li> <em><strong>Cage</strong></em></li> <li><em><strong>Circle</strong></em></li> <li> <em><strong>Flag</strong></em></li> </ul> space_out </br> Most nouns that <i>do not end</i> in <i>-s</i> are considered <i>singular</i>."
									],
									[
										"title"   => "Proper Noun",
										"lesson_type" => "side_tabs",
										"tab_buttons" => [],
										"tab_buttons_content" => [],
										"content" => " space_in <span>A <em><strong>plural noun</strong></em> refers to <em><strong>two or more.</strong></em> <p>Example:</p></div> <ul> <li> <em><strong>Tiger</strong></em> </li> <li> <em><strong>Cage</strong></em></li> <li><em><strong>Circle</strong></em></li> <li> <em><strong>Flag</strong></em></li> </ul> <div>Most <em><strong>plural nouns </strong></em> end in <em><strong>-s</strong></em> However, nouns like <em><strong>mathermatics, physics, politics, and measles </strong></em> are considered<em><strong>singular nouns</strong></em> </span> space_out "
									],
									[
										"title"  => "Rules to Form the Plural",
										"lesson_type" => "side_tabs",
										"tab_buttons" => ["Rule 1","Rule 2","Rule 3","Rule 4","Rule 5","Rule 6","Rule 7"],
										"tab_buttons_content" => [" space_in Most nouns form their plural by adding -s.<br>Example:<br>• tent - tents<br>• elephant - elephants<br>• card - cards<br>• pen - pens",
																  " space_in Nouns ending in-s, -x, -ch, -sh, and -z form their plurals by adding -es.<br>Examples:<br>• bus -  buses; glass - glasses<br>• box - boxes; tax - taxes<br>• church - churches; bench - benches<br>• sash - sashes; brush - brushes<br>• buzz - buzzes; fizz - fizzes space_out ",
																  " space_in Nouns ending in -y <u>with a consonant before it</u> form their plural by chaning y to i and adding -es.<br>Examples:<br>• lady - ladies<br>• candy - candies<br>• baby - babies<br>• city - cities<br>• pony - ponies space_out ",
																  " space_in Nouns ending in -y <u>with a vowel before it</u> form their plural by adding -s.<br>Example:<br>• key - keys<br>• boy - boys<br>• day - days<br>• play - plays space_out ",
																  " space_in Nouns ending in -o <u>with a consonant before it</u> form their plural by adding -es.<br> Example:<br>• mango - mangoes<br>• tomato - tomatoes<br>• echo - echoes<br>• potato - potatoes space_out ",
																  " space_in Nouns that end in - o <u>with a vowel before it</u> form their plural by adding -s.<br>Examples:<br>• ratio - ratios<br>• radio - radios<br>• igloo - igloos<br>• studio - studios space_out ",
																  " space_in There are some special rules to be followed in forming the plural of some nouns.<br>• Most nouns ending in -f or -gh sounded as /f/ form their plural by adding -s.<br>Example:<br>• spoof - spoofs<br>• graph - graphs space_out space_in • There are also nouns ending in -f or -fe sounded as /f/ that form their plural by changing f or fe to v and adding -s or -es.<br>Example:<br>• life - lives<br>• leaf - leaves<br>• wife - wives space_out space_in Some nouns form their plural by changing their spelling.<br>Examples:<br>• man - men<br>• tooth - teeth<br>• mouse - mice space_out space_in Some nouns do not change form even when expressed in the plural form.<br>Examples:<br>• sheep - sheep<br>• aircraft - aircraft<br>• moose - moose space_out"],
										"content" => "",

									]
							],
				"activity" => [
								[
									"title"=> "Number of Nouns",
									"instruction"=> "<center>Type the plural form of the given nouns.</center>",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "Chair - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"chairs"
											],
											[
												"question_text" => "Fan - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"fans"
											],
											[
												"question_text" => "Table - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"tables"
											],
											[
												"question_text" => "Picture - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"pictures"
											],
											[
												"question_text" => "Pencil - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"pencils"
											],
											[
												"question_text" => "Flag - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"flags"
											],
											[
												"question_text" => "Pupil - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"pupils"
											],
											[
												"question_text" => "Teacher - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"teachers"
											],
											[
												"question_text" => "Desk - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"desks"
											],
											[
												"question_text" => "Drawer - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"drawers"
											],

											[
												"question_text" => "Shelf - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"shelves"
											],
											[
												"question_text" => "Knife - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"knives"
											],
											[
												"question_text" => "Thief - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"thieves"
											],
											[
												"question_text" => "Hoof - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"hoove"
											],
											[
												"question_text" => "Graph - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"graphs"
											],
											[
												"question_text" => "Mouse - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"mice"
											],
											[
												"question_text" => "Ox - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"oxen"
											],
											[
												"question_text" => "Tooth - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"teeth"
											],
											[
												"question_text" => "Woman - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"women"
											],
											[
												"question_text" => "Sheep - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"sheeps"
											],

											[
												"question_text" => "Slash - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"slashes"
											],
											[
												"question_text" => "Switch - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"switches"
											],
											[
												"question_text" => "Butterfly - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"butterflies"
											],
											[
												"question_text" => "Lily - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"lilies"
											],
											[
												"question_text" => "Box - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"boxes"
											],

											[
												"question_text" => "Dress - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"dresses"
											],
											[
												"question_text" => "Dish - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"dishes"
											],
											[
												"question_text" => "Story - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"stories"
											],
											[
												"question_text" => "Tax - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"taxes"
											],
											[
												"question_text" => "Class - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"classes"
											],

											[
												"question_text" => "Monkey - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"monkeys"
											],
											[
												"question_text" => "Hero - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"heroes"
											],
											[
												"question_text" => "Stereo - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"stereos"
											],
											[
												"question_text" => "Donkey - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"donkeys"
											],
											[
												"question_text" => "Tomato - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"tomatoes"
											],

											[
												"question_text" => "Toy - <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>",
												"question_type" => "typing",
												"question_answer"=>"toys"
											],
											[
												"question_text" => "Carabao - <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>",
												"question_type" => "typing",
												"question_answer"=>"carabaos"
											],
											[
												"question_text" => "Ray - <div  contenteditable='true' class='answer_field' data-answer_index='3'></div>",
												"question_type" => "typing",
												"question_answer"=>"rays"
											],
											[
												"question_text" => "Echo - <div  contenteditable='true' class='answer_field' data-answer_index='4'></div>",
												"question_type" => "typing",
												"question_answer"=>"echoes"
											],
											[
												"question_text" => "Potato - <div  contenteditable='true' class='answer_field' data-answer_index='5'></div>",
												"question_type" => "typing",
												"question_answer"=>"potatoes"
											],

										]

								],
								[
									"title"=> "Number of Nouns",
									"instruction"=> "Fill in the blanks with the plural form of the nouns in the parentheses.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "if I could make (wish) <div  contenteditable='true' class='answer_field' data-answer_index='1'></div>  upon a star.",
												"question_type" => "typing",
												"question_answer"=>"wishes"
											],
											[
												"question_text" => "I'd wish for wrist (watch) <div  contenteditable='true' class='answer_field' data-answer_index='2'></div>  and a car. ",
												"question_type" => "typing",
												"question_answer"=>"watches"
											],
											[
												"question_text" => "I'd drink from gold (glass) <div  contenteditable='true' class='answer_field' data-answer_index='3'></div> .",
												"question_type" => "typing",
												"question_answer"=>"glasses"
											],
											[
												"question_text" => "And wear beautiful  (dress) <div  contenteditable='true' class='answer_field' data-answer_index='4'></div> .",
												"question_type" => "typing",
												"question_answer"=>"dresses"
											],
											[
												"question_text" => "Then keep them in (box) <div  contenteditable='true' class='answer_field' data-answer_index='5'></div> .",
												"question_type" => "typing",
												"question_answer"=>"boxes"
											],
											[
												"question_text" => "That are seven <div  contenteditable='true' class='answer_field' data-answer_index='5'> long (inch)</div> .",
												"question_type" => "typing",
												"question_answer"=>"inches"
											],
										]

								],
							]
			];
	echo json_encode($array);
