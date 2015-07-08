<?php
	header("Content-Type: application/json");
	$array = [
				"module_title" => "Adjective in a Series",
				"objective"  => "<ul> 
				<li>Arrange <i>Adjective in a Series</i></li> 
				<li>Supply a Series of Adjectives</li> </ul>",
				"tutorial" => [
									[
										"title"   => "Adjective in a Series",
										"lesson_type" => "side_tabs",
										"content" =>" space_out space_in  Adjective in a Series When more than one adjective is used to describe a noun, they follow a correct series or order, namely: 
										<br> ♦ Article(the a,or an) 
										<br> ♦ Number 
										<br> ♦ Quality,kind,or characteristic 
										<br> ♦ Size 
										<br> ♦ Shape 
										<br> ♦ Color 
										<br> ♦ Origin or nationality 
										<br> Example: the two beautiful round golden clocks 
										<table border='1' width='100%'>
										<tr>
											<th>the</th>
											<th>two</th>
											<th>beautiful</th>
											<th>round</th>
											<th>golden</th>
											<th>clocks</th>
										</tr>

										<tr>
											<td>(article)</td>
											<td>(number)</td>
											<td>(quality)</td>
											<td>(shape)</td>
											<td>(color)</td>
											<td>(noun described)</td>
										</tr>

									</table>
										"
									],
									[
										"title"   => "Table",
										"lesson_type" => "side_tabs",
										"content" => "  space_in Read and study the following sentences: 
										<br> 1.Greg and Peter came with two new brown basketballs. 
										<br> 2.One big white dog met them at the gate.
										<br> 3.Mother arrived with a dozen fresh red apples. 
										<br> 4.She also bought one smooth, rectangular blue towel. 
										<br> The words in blue in the above sentences are adjectives that describe the nouns,basketballs,dog,apples, and towel. The adjectives follow a correct series or order. Study the table below for the correct series or order.
										 space_out space_in 
										<br> 1.Greg and Peter came with two new brown basketballs. 
										<table border='1' width='100%'>
										<tr>
											<th>The words,</th>
											<th>two,</th>
											<th>new</th>
											<th>brown</th>
											<th>describe the</th>
											<th>basketballs</th>
										</tr>

										<tr>
											<td> </td>
											<td>(number)</td>
											<td>(quality)</td>
											<td>(shape)</td>
											<td> </td>
											<td>(noun described)</td>
										</tr>
										</table>

										<br> 2.One big white dog met them at the gate. 
											<table border='1' width='100%'>
										<tr>
											<th>The words,</th>
											<th>one,</th>
											<th>big</th>
											<th>white</th>
											<th>describe the</th>
											<th>dog</th>
										</tr>

										<tr>
											<td> </td>
											<td>(number)</td>
											<td>(quality)</td>
											<td>(shape)</td>
											<td> </td>
											<td>(noun described)</td>
										</tr>
										</table>
										 space_out space_in 
										<br> 3.Mother arrived with a dozen fresh red apples.
										</table>
											<table border='1' width='100%'>
										<tr>
											<th>The words,</th>
											<th>a,</th>
											<th>dozen,</th>
											<th>fresh</th>
											<th>red</th>
											<th>describe the</th>
											<th>apple</th>
										</tr>

										<tr>
											<td> </td>
											<td>(article)</td>
											<td>(number)</td>
											<td>(quality)</td>
											<td>(shape)</td>
											<td> </td>
											<td>(noun described)</td>
										</tr>
										</table>
										<br> 4.She also bought one smooth,rectangular blue towel.
											<table border='1' width='100%'>
										<tr>
											<th>The words,</th>
											<th>one,</th>
											<th>smooth,</th>
											<th>rectangular,</th>
											<th>blue</th>
											<th>describe the</th>
											<th>towel</th>
										</tr>

										<tr>
											<td> </td>
											<td>(number)</td>
											<td>(quality)</td>
											<td>(shape)</td>
											<td>(color)</td>
											<td> </td>
											<td>(noun described)</td>
										</tr>
										</table>
										 space_out "
									]
				],
				
				"activity"   => [
						 [
							"title"=> "Adjective in a Series",
							"instruction"=> "Arrange each of the following series of adjectives in correct order",
							"questions" => [
												[
													"question_text" =>  "five/the/long/brown/rectangular/desk.",
													"question_type" => "sentence_fragment",
													"question_answer" => "The five long rectangular brown desks.",
												],
												[
													"question_text" =>  "The/brown/three/new/bags.",
													"question_type" => "sentence_fragment",
													"question_answer" => "The three new brown bags.",
												],

												[
													"question_text" =>  "A/dozen/sweet/round/doughnuts.",
													"question_type" => "sentence_fragment",
													"question_answer" => "A dozen sweet round doughnuts",
												],
												[
													"question_text" =>  "pretty/fair-skinned/The/tall/ladies.",
													"question_type" => "sentence_fragment",
													"question_answer" => "The pretty tall fair-skinned ladies.",
												],
												[
													"question_text" =>  "The/brown/quick/big/fox.",
													"question_type" => "sentence_fragment",
													"question_answer" => "The quick big brown fox.",
												]
											]

						],


					]
			];
	
	echo $json =  json_encode($array);
?>