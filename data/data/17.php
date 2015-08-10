<?php
	header("Content-Type: application/json");

	$array = [
				"module_title" => "Pronoun-Antecedent Agreement",
				"objective"  => "<ul> 
								<li>Identify <i>Pronouns</i> and <i>their antecedents</i></li> 
								<li>Use correct pronouns that agree with their antecedents</li> 
								<li>Write an essay about a picture of a memorable place or event</li> 
								</ul>",
				"tutorial" => [
									[
										"title"   => "The antecedents of Pronouns",
										"lesson_type" => "side_tabs",
										"content" =>"  space_in The Antecedents of Pronouns
			<br>• Antecedent is a word, which a pronoun refers to.
				<br> Example:
					<br> • The day of the graduation came. It was a memorable one.
					<br>	The word day is the antecedent of it.
					<br>• Kyla got a puppy. It was gift from her grandparents.
					<br>	The word puppy is the antecedent of it.
					<br>• Kyla was happy that she receive a medal.
					<br>	The word Kyla is the antecedent of she.
		<br>
					<br>• Her grandparents were around.  space_out space_in They came from the province.
					<br>	The word grandparents is the antecedent of they.
					<br>• Her teacher attended the party. They were very happy for her.
						The word teachers is the antecedent of they.
			<br>• The word it, she, and they are pronouns. They refer to day, puppy, Kyla, grandparents, and teachers.
		<br>
			<br>• The words they refer to are their antecedents.  space_out  "
									],
									[
										"title"   => "Pronouns with their Antecedents",
										"lesson_type" => "side_tabs",
										"content" =>"  space_in  Pronouns With Their Antecedents
			<br>• Pronoun should agree with their antecedents in number and gender.
			<br> • The pronouns he, him and his are used when the antecedent is singular and in the masculine gender.
			<br> • The pronouns she, her and hers are used when the antecedent is singular and in the feminine gender.
			<br> • The pronouns it and its are used when the antecedent is singular and is in common gender that refer to animals and is in neuter gender.
		<br>
			<br> • The pronouns they, their, them and theirs refer to plural antecedent in any gender.
			<br>• The pronouns we, us, our and ours refers to plural antecedents including the speaker.
			<br> • These also refer to persons in masculine, feminine, and common genders.
			 space_out   "
									]
								],
				"activity" => [
									[
										"title"=> "Pronoun-Antecedent Agreement",
										"instruction"=> "Find the pronoun and its antecedent in each sentence.",
										"questions" => [
															[
																"question_text" => "The pupils came with their parents to watch a magic show.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Pronouns", "Antecedents"],
																"question_answer" => ["their", "pupils"]
															],
															[
																"question_text" => "The show manager appeared on stage with his other magicians.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Pronouns", "Antecedents"],
																"question_answer" => ["his", "show manager"]
															],
															[
																"question_text" => "The show was spectacular that it made everybody excited.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Pronouns", "Antecedents"],
																"question_answer" => ["it", "show"]
															],
															[
																"question_text" => "Four magicians performed their tricks.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Pronouns", "Antecedents"],
																"question_answer" => ["their", "magicians"]
															],
															[
																"question_text" => "Included in one of acts was a dog showing its antics.",
																"question_type" => "sentence_fragment_two_column",
																"question_choices" => ["Pronouns", "Antecedents"],
																"question_answer" => ["its", "antics"]
															]
														]

									],
									[
										"title"=> "Pronoun-Antecedent Agreement",
										"instruction"=> "Read each paragraph. Write in the blank the correct pronoun that agrees with the antecedent in red.",
										"questions" => [
															[
																"question_text" => "The <b>Santacruzan</b> ia a religious festivity. <div class='answer_field'></div> is a reenactment of St. Helen's search for the true cross where Jesus died. <div class='answer_field'></div> is done every month of May. Usually a beautiful <b>lady</b> names as Reyna Elena plays the part. <div class='answer_field'></div> participation makes the ocassion more meaningful. There are other parts which are played by ladies too. ",
																"question_type" => "pool_of_words_multiple_answer1",
																"question_answer" => ["It", "It", "Her"]
															],
															[
																"question_text" => "The <b>bamboo organ</b> is one of its kind in the whole world. <div class='answer_field'></div> is in St. Joseph's Parish in Las Pinas City. <b>Tourists</b> would come to see it. <div class='answer_field'></div> are interested to see how it is played. <div class='answer_field'></div> could not believe that there is such an instrument in the country. ",
																"question_type" => "pool_of_words_multiple_answer1",
																"question_answer" => ["It", "They", "They"]
															],
															[
																"question_text" => "<b>Fort Santiago</b> is a historical place. <div class='answer_field'></div> served as <b>Dr. Jose Rizal's</b> prison cell before <div class='answer_field'></div> execution in Luneta. Fort Santaigo has become a favorite field trip destination. <b>Many schools</b> bring <div class='answer_field'></div> pupils to this place. ",
																"question_type" => "pool_of_words_multiple_answer1",
																"question_answer" => ["It", "his", "their"]
															],
															[
																"question_text" => "<b>Uncle Max</b> likes photography. <div class='answer_field'></div> great love for nature drove <div class='answer_field'></div> into photography. <div class='answer_field'></div> keeps several albums of photos of seascapes and landscapes. <div class='answer_field'></div> <b>children</b> are beginning to be interested in taking pictures too. <div class='answer_field'></div> like to be with <div class='answer_field'></div> father always. ",
																"question_type" => "pool_of_words_multiple_answer1",
																"question_answer" => ["His", "him", "He", "His", "They", "their"]
															],
															[
																"question_text" => "Today <b>my classmates and I</b> will hold a party for <div class='answer_field'></div> teacher. <div class='answer_field'></div> love <b>Miss Jenny Tan</b> so much that <div class='answer_field'></div> is really like a mother to us. The <b>boys</b> prepared teh chairs and tables. <div class='answer_field'></div> also invited other teachers to attend. <b>Gina and I</b> prepared the program. <div class='answer_field'></div> asked our mothers to prepare the food. ",
																"question_type" => "pool_of_words_multiple_answer1",
																"question_answer" => ["our", "We", "she", "They", "We"]
															]
														]

									],
									
									
							]
			];
	
	echo $json =  json_encode($array);
?>