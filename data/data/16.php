<?php
	header("Content-Type: application/json");

	$array = [
			"module_title" => "Indefininte Pronouns",
				"objective"  => "<ul> 
								<li>Identify and use <i>Indefininte Pronouns</i> correctly</li> 
								</ul>",
				"tutorial" => [
									[
										"title"   => "Indefininte Pronouns",
										"lesson_type" => "side_tabs",
										"content" =>" space_in  • Indefinite pronouns are pronouns that do not stand for a particular person or thing.<br>
										Example: • Nobody seemed to care.<br>
										• No one saw him go out of the room.<br>
										• Has anybody got a pen?<br>
										• Has anyone seen a cellphone?<br>
										• Everybody was looking at us.<br>
										• Everyone seemed happy.<br>
										• Somebody said that the show was great.<br>
										• Someone is at the door.<br><br>
										 space_out space_in 
										• The indefinite pronouns everyone, everybody, no one, nobody, anyone, anybody, someone, and somebody are used to refer to persons.<br>
										• Someone and somebody mean the same.<br>
										• Everyone and everybody mean the same.<br>
										• Anyone and anybody mean the same.<br><br>

										• The indefinite pronouns everything, something, anything, and nothing are used to refer to nonliving things.<br>
										 space_out space_in 
										Examples:<br>
										 
										• Everything went according to the plan.<br>
										• He could hear anything.<br> 
										• The boy has something with him.<br>
										• There was nothing in the news.<br><br>
										• Indefinite pronouns like everybody, everyone, everything, anything, anybody, anyone, someone, something, somebody, nothing, nobody, and no one are followed by singular verbs.<br>
										Examples:
										• Nobody cares for me.
										• Everyone is invited to the party.
										• Everything is fine in the neighborhood.  space_out "
									]
				],
			"activity" => [
							 [
									"title"=> "Demonstrative Pronouns",
									"instruction"=> "Read each paragraph. Click the Indefininte pronouns. ",
									"questions" => [
												[
												"question_text" => "Mrs. Dela Cruz would like to visit her daughter's school. She called up the principal's office and talked to the secretary. She called up the 
												principal's office and talked to the secretary.<br>
												 <b>Mrs. Dela Cruz:</b> Good morning, I'm Mrs. Dela Cruz. Would you know if <div class='answer_field'></div> is in the office? <br>
												 <b>Secretary:</b> Good morning also, Ma'am. <div class='answer_field'></div> is there. <div class='answer_field'></div> fetched the principal early today. <br>
												 <b>Mrs. Dela Cruz:</b> Does <div class='answer_field'></div> know if she's coming back this afternoon? <br>
												 <b>Secretary:</b> I'm sorry, Ma'am, but I think <div class='answer_field'></div> knows. <div class='answer_field'></div> was so busy that <div class='answer_field'></div>
												  noticed.<br>
												  It's 10:00 am. The bell rings for recess. <div class='answer_field'></div> is hungry so <div class='answer_field'></div> rushes to the canteen. 
												  In the canteen, <div class='answer_field'></div> is served food without lining up. <div class='answer_field'></div> who does not line up is reported 
												  to the class adviser. <div class='answer_field'></div> follows this rules so everything is in order in the canteen. <div class='answer_field'></div> goes 
												  wrong even if there are many pupils eating in the canteen.
												",
													
													"question_choices" => [
																			["Anybody","Everybody"," Nobody"],
																			["Anybody","Everybody"," Nobody"],
																			["Someone","Somebody"],
																			["Someone","Somebody"],
																			["Nobody","No one"," Nothing"],
																			["Everybody","Everyone"," Everything"],
																			["Nobody","No one"," Nothing"],
																			["Everybody","Everyone"," Everything"],
																			["Everybody","Everyone"," Everything"],
																			["Nobody","No one"," Nothing"],
																			["Someone","Somebody"],
																			["Everybody","Everyone"," Everything"],
																			["Everybody","Everyone"," Everything"],
																			["Nobody","No one"," Nothing"],
																		],
													"question_type" => "multi_dual_selection",
													"question_answer" => ["Anybody","Nobody","Someone","Somebody","No one","Everybody","Nobody","Everybody","Everyone","Nobody","Someone","Everyone","Everything","Nothing"]
												]
											]
								],
						]
		];
	echo $json =  json_encode($array);
?>