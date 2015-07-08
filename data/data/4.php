<?php
	header("Content-Type: application/json");
	$array = [
				"module_title"=> "Common and Proper Nouns",
				"objective"=> "• Identify and classify <i>nouns</i> or <i>name words</i></br>• Identify<i>common</i> and <i>proper nouns</i></br>",
				"tutorial" => [
								[
									"title"   => "Noun",
									"lesson_type" => "side_tabs",
									"content" => "<span>A noun is a name of a <em><strong>person, place, thing, animal, or event.</strong> </em><p>Example:</p> <ul> <li>I went camping with my <em><strong>friends.</strong></em></li> <li>That <em><strong>day</strong> was unforgettable for me.</em></li> <li>The <em><strong>place</strong></em> was far but peaceful.</li> <li>We sang <em><strong>songs</strong></em> and recited <em><strong>poems.</strong></em></li> <li>Our <em><strong>shoes</strong></em> got soaked in <em><strong>mud.</strong></em></li></ul> </span>  </br> The words, <em><strong>friends</strong></em>, <em><strong>day</strong></em>, <em><strong>place</strong></em>, <em><strong>songs</strong></em>, <em><strong>poems</strong></em>, <em><strong>shoes</strong></em>, and <em><strong>mud</strong></em> are name words. They are called <em><strong>nouns</em></strong>."
								],
								[
									"title"   => "Proper Noun",
									"lesson_type" => "side_tabs",
									"content" => "<span>A <em><strong>proper noun</strong> </em> names a particular <em><strong>person, place, thing, animal, event. </strong></em>It begins with a <strong><em> capital letter.</em></strong> <p>Example:</p> <ul> <li>to see<em><strong> Jefferson</strong></em></li> <li>camping in <em><strong>Biak-na-Bato</strong></em></li> <li>on a rainy <em><strong>Saturday</strong></em></li> <li>bound for <em><strong>Bulacan</strong></em></li> </ul> The words <em><strong>Jefferson, Biak-na-Bato,Saturday and Bulacan</strong> </em> are specific names referring to a person places and a day. These words are called<strong><em> proper nouns </em></strong> </span>"
								],
								[
									"title"   => "Common Noun",
									"lesson_type" => "side_tabs",
									"content" => " <span>A <em><strong>common noun</strong></em> names in general any <em><strong>person, place, thing, animal, event.</strong></em> It begins with a <em><strong>smaller letter</strong></em>. <p>Example:</p> <ul> <li>The <em><strong>boys</strong></em> sat quietly.</li> <li>This is a big <em><strong>town.</strong></em></li> <li>I have a pet <em><strong>dog</strong></em></li> <li>My <em><strong>bag</strong></em> is very heavy.</li> </ul> The words, <em><strong>boys, town, dog,</strong></em> and <em><strong>bag</strong></em> are general names referring to a person, place, animal, and thing. These words are called <em><strong>common nouns.</strong></em> </span>"
								]
							],
				"activity" => [
								[
									"title"=> "Common and Proper Nouns",
									"instruction"=> "Click on the word that is not a noun.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["fish","star","erase","square","crayon"],
												"question_answer"=>"erase"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["live","year","day","week","month"],
												"question_answer"=>"live"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["house","street","near","flower","barangay"],
												"question_answer"=>"near"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["balloon","visit","tree","shoes","socks"],
												"question_answer"=>"visit"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["old","fruits","photo","outing","vegetables"],
												"question_answer"=>"old"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["parents","friends","speak","cousin","classmate"],
												"question_answer"=>"speak"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["time","cold","weather","cloud","rain"],
												"question_answer"=>"cold"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["write","pen","book","novel","magazine"],
												"question_answer"=>"write"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["farm","park","plaza","walk","auditorium"],
												"question_answer"=>"walk"
											],
											[
												"question_text" => "",
												"question_type" => "pool_of_words",
												"question_choices" => ["yard","cart","field","hay","correct"],
												"question_answer"=>"correct"
											],

										]

								],
								[
									"title"=> "Common and Proper Nouns",
									"instruction"=> "Click on the proper and common nouns in the given sentences.",
									"description"=> "<div style='list-style-type: square;'><span ><div>&nbsp;A phrase is a group of words, which does not </div> <ul> <li>has a <em><strong>complete</strong> <strong>thought</strong></em></li> <li>begins with a <em><strong>capital</strong> <strong>letter</strong></em></li> <li>ends with a <em><strong>period</strong></em>, an <em><strong>exclamation</strong> <strong>point</strong> </em>or a <em><strong>question</strong> <strong>mark</strong></em></li> </ul> <p>Example:</p> <ul> <li>Kyle and Kent</li> <li>along the corridor</li> <li>to see Boracay</li> </ul></span></div>",
									"questions" => [
											[
												"question_text" => "My Uncle Jessie is a well-respected man.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" => ["proper","common"],
												"question_answer"=>["Barangay Sta. Maria","barangay"]
											],
											[
												"question_text" => "It is a peaceful place in Las Pinas City.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" => ["proper","common"],
												"question_answer"=>["Las Pinas City","place"]
											],
											[
												"question_text" => "Each street is clean but Rosal Street was awarded the cleanest of all.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" =>["proper","common"],
												"question_answer"=>["Rosal Street","street"]
											],
											[
												"question_text" => "The principal founded Young Achievers Learning Center after he observed other day care centers.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" =>["proper","common"],
												"question_answer"=>["Young achievers Learning Center","centers"]
											],
											[
												"question_text" => "He has a favorite orphanage, the Hospicio De San Jose.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" => ["proper","common"],
												"question_answer"=>["Hospicio De San Jose","orphanage"]
											],
											[
												"question_text" => "Policemen there are helpful like Superintendent Cristobal and Chief Inspector Bayani.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" => ["proper","common"],
												"question_answer"=>["Superintendent Cristobal, Chief Inspector Bayani","Policemen"]
											],
											[
												"question_text" => "My Uncle Jessie is a well-respected man.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" => ["proper","common"],
												"question_answer"=>["Uncle Jessie","man"]
											],
											[
												"question_text" => "As our barangay captain, he is called Captain Jess.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" =>["proper","common"],
												"question_answer"=>["Captain Jess",""]
											],
											[
												"question_text" => "The people love him according to Mr. Ian Santos and Mrs. Ina Banaga.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" =>["proper","common"],
												"question_answer"=>["Mr. Ian Santos, Mrs. Ina Banaga","people"]
											],
											[
												"question_text" => "They like his projects such as the Clean and Green Environment and Academic Scholarship for the Poor.",
												"question_type" => "sentence_fragment_two_column",
												"question_choices" => ["proper","common"],
												"question_answer"=>["Clean and Green, Scholarships for the Poor","projects"]
											],

										]

								],

							]
			];
	echo json_encode($array);
