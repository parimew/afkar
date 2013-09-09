
    <?php include('includes/head.php'); ?>
    
    <body class="apply">
        <header id="header" class="stellar" data-stellar-background-ratio="0">
        	<div class="container_4">
        		<div id="we-are-glad" class="grid_4">
		        	<h2>We’re glad to see you here! Go for it!</h2>
		        	<p>Before you dive into the form gather all the information you may need. 
You need to convince, inspire and excite us that by choosing you we will be investing in <b>the next big thing for the MENA digital sector.</b></p>
	        	</div><!-- END #we-are-glad -->	        	
        	</div><!-- END .container_4 -->
        </header>
        <?php include('includes/nav.php'); ?>
        
        <section id="form-container">
	        <div class="container_4">
	        		<p class="grid_4 message success">Thanks for applying! Check your mail and keep informed about all our activities. We’ll let you know if your project passes to the next stage.</p>
	        		<p class="grid_4 message error">Please, check all red fields and complete the necessary information</p>
	        		<div class="clear"></div>
		        	<form action="send-form.php">
		        		<header class="grid_4">
				        	<h5>YOUR IDEA/PROJECT</h5>
				        	<div></div><!-- line -->
			        	</header>
			        	<div class="clear"></div>
			        	
		        		<div class="input-container">
			        		<label for="txtMyIdea">Describe your idea/project in 500 characters</label>
			        		<span class="mandatory">Don’t you know how to describe it? Come on!</span>
			        		<div class="textarea-wrapper">
				        		<textarea id="txtMyIdea" data-Maxlength="500" class="countdown"></textarea>
				        		<span>500</span>
			        		</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container">
			        		<label for="txtProblem">What problem or customer pain does your idea/project intend to solve?</label>
			        		<span class="mandatory">There isn’t any problem? Explain it</span>
			        		<div class="textarea-wrapper">
				        		<textarea id="txtProblem" data-Maxlength="500" class="countdown"></textarea>
				        		<span>500</span>
			        		</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container">
			        		<label for="txtTarget">Who is your target audience and what makes your solution unique?</label>
			        		<span class="mandatory">There isn’t any problem? Explain it</span>
			        		<div class="textarea-wrapper">
				        		<textarea id="txtTarget" data-Maxlength="500" class="countdown"></textarea>
				        		<span>500</span>
			        		</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container radios-wrapper">
		        			<h6>What stage is your business at?</h6>
		        			<input type="radio" checked="checked" name="opStage" id="project-idea" value="Project/idea"/><label for="project-idea">Project/idea</label>
		        			<input type="radio" name="opStage" id="demo" value="Demo"/><label for="demo">Demo</label>
		        			<input type="radio" name="opStage" id="finished-product" value="Finished Product"/><label for="finished-product">Finished Product</label>
		        			<input type="radio" name="opStage" id="already-launched" value="Already launched"/><label for="already-launched">Already launched</label>
		        		</div><!-- END .input-container -->
		        		<div class="input-container checks-wrapper">
		        			<h6>How will you get revenue?</h6>
		        			<span class="mandatory">You must select at least one option</span>
		        			<div class="column">
			        			<input id="pay-per-use" type="checkbox" name="check" value="Pay per use"><label for="pay-per-use">Pay per use</label><br />
			        			<input id="subscription-service" type="checkbox" name="check" value="Subscription Service"><label for="subscription-service">Subscription Service</label><br />
			        			<input id="lending" type="checkbox" name="check" value="Lending/Leasing/Renting"><label for="lending">Lending/Leasing/Renting</label>	
		        			</div>
		        			<div class="column">
		        				<input id="licensing" type="checkbox" name="check" value="Licensing"><label for="licensing">Licensing</label><br />
		        				<input id="advertising" type="checkbox" name="check" value="Advertising"><label for="advertising">Advertising</label><br />
		        				<input id="other" type="checkbox" name="check" value="Other"><label for="other">Other</label>
		        			</div>
		        			<div class="clear"></div>
		        		</div><!-- END .input-container -->
		        		<div class="input-container">
		        			<label>Explain the logic behind your selections</label>
		        			<span class="mandatory">Don’t leave this field in blank!</span>
		        			<div class="textarea-wrapper">
		        				<textarea id="txtLogic" data-Maxlength="500" class="countdown"></textarea>
		        				<span>500</span>
		        			</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container">
			        		<label for="txtMena">Why do you think your idea/project is suitable for the MENA Market?</label>
			        		<span class="mandatory">Give us some reasons</span>
			        		<div class="textarea-wrapper">
				        		<textarea id="txtMena" data-Maxlength="500" class="countdown"></textarea>
				        		<span>500</span>
			        		</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container" id="similar-products">
		        			<h6>Name some similar products in regional or international markets (include the URL if possible)</h6>
		        			<p class="optional">Optional</p>
		        			<div class="product">
			        			<label for="txtProduct1">1 - </label><input type="text" id="txtProduct1" />
			        			<label for="txtUrl1">URL </label><input type="text" id="txtUrl1" placeholder="http://" />
		        			</div>
		        			<div class="product">
			        			<label for="txtProduct2">2 - </label><input type="text" id="txtProduct2" />
			        			<label for="txtUrl2">URL </label><input type="text" id="txtUrl2" placeholder="http://" />
		        			</div>
		        			<div class="product">
			        			<label for="txtProduct2">3 - </label><input type="text" id="txtProduct3" />
			        			<label for="txtUrl3">URL </label><input type="text" id="txtUrl3" placeholder="http://" />
		        			</div>
		        		</div><!-- END .input-container -->
		        		<div class="input-container" id="similar-products">
		        			<h6>Upload documents if you consider they will help us get a better understanding of your project</h6>
		        			<p class="subtitle">3 files max, 20MB max each. Bios of the team mebers, Business Plan, Business Presentation, etc)</p>
		        			<p class="optional">Optional</p>
		        			
		        			<div id="uploadead-files" class="dropzone-previews"></div>
		        			<span id="fileHolder">Drag and drop your files here<br />or<br />click to browse</span>
		        		</div><!-- END .input-container -->
		        		
		        		<header class="grid_4">
				        	<h5>ABOUT YOU AND YOUR TEAM</h5>
				        	<div></div><!-- line -->
			        	</header>
			        	<div class="clear"></div>
			        	<div class="input-container" id="team">
			        		<h6>Provide the URL to a short video presentation of you and your team </h6>
		        			<p class="subtitle">(vimeo, youtube, others. 1 minute maximum length)</p>
		        			<p class="optional">Optional</p>
		        			<div class="row">
			        			<label for="txtUrlShortVideo">URL</label>
			        			<input type="text" id="txtUrlShortVideo" placeholder="http://" />
		        			</div><!-- END .row -->
		        			<div class="row">
		        				<label for="videoPass">Please provide the password if any</label>
		        				<input type="text" id="videoPass" />
		        			</div><!-- END .row -->
		        			<div class="alter-row">
		        				<label for="txtPeopleInTeam">How many people are there in your team?</label>
		        				<input id="txtPeopleInTeam" type="number" value="0"/>
		        			</div><!-- END .row -->
		        			<div class="alter-row">
		        				<label for="txtFullName">What is your name? (Full name)</label>
		        				<span class="mandatory">Ups! You forget your name</span>
		        				<input id="txtFullName" type="text"/>
		        			</div><!-- END .row -->
		        			<div class="row birth">
			        			<h6>Date of birth</h6>
			        			<div class="dates">
			        				<label for="">Month</label>
				        			<!-- MONTH CUSTOM SELECT -->
									<div class="custom-select">
										<p data-value="01" id="txtMonth">January <i class="icon-sort"></i></p>
										<ul>
											<li data-value="01">January</li>
											<li data-value="02">February</li>
											<li data-value="03">March</li>
											<li data-value="04">April</li>
											<li data-value="05">May</li>
											<li data-value="06">June</li>
											<li data-value="07">July</li>
											<li data-value="08">August</li>
											<li data-value="09">September</li>
											<li data-value="10">October</li>
											<li data-value="11">November</li>
											<li data-value="12">December</li>
										</ul>
									</div><!-- END .custom-select -->
			        			</div><!-- END .dates -->
			        			<div class="dates day">
									<label for="">Day</label>
									<!-- DAY CUSTOM SELECT -->
									<div class="custom-select">
										<p data-value="01" id="txtDay">01 <i class="icon-sort"></i></p>
										<ul>
											<?php for($x=1; $x <= 31; $x++){ ?>
											<li data-value="<?php echo $x; ?>"><?php echo ($x<10?'0'.$x:$x); ?></li>		
											<?php } ?>
										</ul>
									</div><!-- END .custom-select -->
								</div><!-- END .dates -->
			        			<div class="dates year">
									<label for="">Year</label>
									<!-- YEAR CUSTOM SELECT -->
									<div class="custom-select">
										<p data-value="1970" id="txtYear">1970 <i class="icon-sort"></i></p>
										<ul>
											<?php for($x=1930; $x <= 1998; $x++){ ?>
											<li data-value="<?php echo $x; ?>"><?php echo $x; ?></li>		
											<?php } ?>
										</ul>
									</div><!-- END .custom-select -->
								</div><!-- END .dates -->
		        			</div><!-- END .row -->
			        		<div class="row residence">
			        			<h6>Country of residence</h6>
								<div class="custom-select">
									<p data-value="Bahrain" id="txtResidence">Bahrain <i class="icon-sort"></i></p>
									<ul>
										<li data-value="Bahrain">Bahrain</li>
										<li data-value="Afghanistan">Afghanistan</li>
										<li data-value="Albania">Albania</li>
										<li data-value="Algeria">Algeria</li>
										<li data-value="Andorra">Andorra</li>
										<li data-value="Angola">Angola</li>
										<li data-value="Antigua & Deps">Antigua & Deps</li>
										<li data-value="Argentina">Argentina</li>
										<li data-value="Armenia">Armenia</li>
										<li data-value="Australia">Australia</li>
										<li data-value="Austria">Austria</li>
										<li data-value="Azerbaijan">Azerbaijan</li>
										<li data-value="Bahamas">Bahamas</li>
										<li data-value="Bahrain">Bahrain</li>
										<li data-value="Bangladesh">Bangladesh</li>
										<li data-value="Barbados">Barbados</li>
										<li data-value="Belarus">Belarus</li>
										<li data-value="Belgium">Belgium</li>
										<li data-value="Belize">Belize</li>
										<li data-value="Benin">Benin</li>
										<li data-value="Bhutan">Bhutan</li>
										<li data-value="Bolivia">Bolivia</li>
										<li data-value="Bosnia Herzegovina">Bosnia Herzegovina</li>
										<li data-value="Botswana">Botswana</li>
										<li data-value="Brazil">Brazil</li>
										<li data-value="Brunei">Brunei</li>
										<li data-value="Bulgaria">Bulgaria</li>
										<li data-value="Burkina">Burkina</li>
										<li data-value="Burundi">Burundi</li>
										<li data-value="Cambodia">Cambodia</li>
										<li data-value="Cameroon">Cameroon</li>
										<li data-value="Canada">Canada/li>
										<li data-value="Cape Verde">Cape Verde</li>
										<li data-value="Central African Rep">Central African Rep</li>
										<li data-value="Chad">Chad</li>
										<li data-value="Chile">Chile</li>
										<li data-value="China"></li>
										<li data-value="Colombia">Colombia</li>
										<li data-value="Comoros">Comoros</li>
										<li data-value="Congo">Congo</li>
										<li data-value="Costa Rica">Costa Rica</li>
										<li data-value="Croatia">Croatia</li>
										<li data-value="Cuba">Cuba</li>
										<li data-value="Cyprus">Cyprus</li>
										<li data-value="Czech Republic">Czech Republic</li>
										<li data-value="Denmark">Denmark</li>
										<li data-value="Djibouti">Djibouti</li>
										<li data-value="Dominica">Dominica</li>
										<li data-value="Dominican Republic">Dominican Republic</li>
										<li data-value="East Timor">East Timor</li>
										<li data-value="Ecuador">Ecuador</li>
										<li data-value="Egypt">Egypt</li>
										<li data-value="El Salvador">El Salvador</li>
										<li data-value="Equatorial Guinea">Equatorial Guinea</li>
										<li data-value="Eritrea">Eritrea</li>
										<li data-value="Estonia">Estonia</li>
										<li data-value="Ethiopia">Ethiopia</li>
										<li data-value="Fiji">Fiji</li>
										<li data-value="Finland">Finland</li>
										<li data-value="France">France</li>
										<li data-value="Gabon">Gabon</li>
										<li data-value="Gambia">Gambia</li>
										<li data-value="Georgia">Georgia</li>
										<li data-value="Germany">Germany</li>
										<li data-value="Ghana">Ghana</li>
										<li data-value="Greece">Greece</li>
										<li data-value="Grenada">Grenada</li>
										<li data-value="Guatemala">Guatemala</li>
										<li data-value="Guinea">Guinea</li>
										<li data-value="Guinea-Bissau">Guinea-Bissau</li>
										<li data-value="Guyana">Guyana</li>
										<li data-value="Haiti">Haiti</li>
										<li data-value="Honduras">Honduras</li>
										<li data-value="Hungary">Hungary</li>
										<li data-value="Iceland">Iceland</li>
										<li data-value="India">India</li>
										<li data-value="Indonesia">Indonesia</li>
										<li data-value="Iran">Iran</li>
										<li data-value="Iraq">Iraq</li>
										<li data-value="Ireland">Ireland</li>
										<li data-value="Italy">Italy</li>
										<li data-value="Ivory Coast">Ivory Coast</li>
										<li data-value="Jamaica">Jamaica</li>
										<li data-value="Japan">Japan</li>
										<li data-value="Jordan">Jordan</li>
										<li data-value="Kazakhstan">Kazakhstan</li>
										<li data-value="Kenya">Kenya</li>
										<li data-value="Kiribati">Kiribati</li>
										<li data-value="Korea North">Korea North</li>
										<li data-value="Korea South">Korea South</li>
										<li data-value="Kosovo">Kosovo</li>
										<li data-value="Kuwait">Kuwait</li>
										<li data-value="Kyrgyzstan">Kyrgyzstan</li>
										<li data-value="Laos">Laos</li>
										<li data-value="Latvia">Latvia</li>
										<li data-value="Lebanon">Lebanon</li>
										<li data-value="Lesotho">Lesotho</li>
										<li data-value="Liberia">Liberia</li>
										<li data-value="Libya">Libya</li>
										<li data-value="Liechtenstein">Liechtenstein</li>
										<li data-value="Lithuania">Lithuania</li>
										<li data-value="Luxembourg">Luxembourg</li>
										<li data-value="Macedonia">Macedonia</li>
										<li data-value="Madagascar">Madagascar</li>
										<li data-value="Malawi">Malawi</li>
										<li data-value="Malaysia">Malaysia</li>
										<li data-value="Maldives">Maldives</li>
										<li data-value="Mali">Mali</li>
										<li data-value="Malta">Malta</li>
										<li data-value="Marshall Islands">Marshall Islands</li>
										<li data-value="Mauritania">Mauritania</li>
										<li data-value="Mauritius">Mauritius</li>
										<li data-value="Mexico">Mexico</li>
										<li data-value="Micronesia">Micronesia</li>
										<li data-value="Moldova">Moldova</li>
										<li data-value="Monaco">Monaco</li>
										<li data-value="Mongolia">Mongolia</li>
										<li data-value="Montenegro">Montenegro</li>
										<li data-value="Morocco">Morocco</li>
										<li data-value="Mozambique">Mozambique</li>
										<li data-value="Myanmar">Myanmar</li>
										<li data-value="Namibia">Namibia</li>
										<li data-value="Nauru">Nauru</li>
										<li data-value="Nepal">Nepal</li>
										<li data-value="Netherlands">Netherlands</li>
										<li data-value="New Zealand">New Zealand</li>
										<li data-value="Nicaragua">Nicaragua</li>
										<li data-value="Niger">Niger</li>
										<li data-value="Nigeria">Nigeria</li>
										<li data-value="Norway">Norway</li>
										<li data-value="Oman">Oman</li>
										<li data-value="Pakistan">Pakistan</li>
										<li data-value="Palau">Palau</li>
										<li data-value="Panama">Panama</li>
										<li data-value="Papua New Guinea">Papua New Guinea</li>
										<li data-value="Paraguay">Paraguay</li>
										<li data-value="Peru">Peru</li>
										<li data-value="Philippines">Philippines</li>
										<li data-value="Poland">Poland</li>
										<li data-value="Portugal">Portugal</li>
										<li data-value="Qatar">Qatar</li>
										<li data-value="Romania">Romania</li>
										<li data-value="Russian Federation">Russian Federation</li>
										<li data-value="Rwanda">Rwanda</li>
										<li data-value="St Kitts & Nevis">St Kitts & Nevis</li>
										<li data-value="St Lucia">St Lucia</li>
										<li data-value="Saint Vincent & the Grenadines">Saint Vincent & the Grenadines</li>
										<li data-value="Samoa">Samoa</li>
										<li data-value="San Marino">San Marino</li>
										<li data-value="Sao Tome & Principe">Sao Tome & Principe</li>
										<li data-value="Saudi Arabia">Saudi Arabia</li>
										<li data-value="Senegal">Senegal</li>
										<li data-value="Serbia">Serbia</li>
										<li data-value="Seychelles">Seychelles</li>
										<li data-value="Sierra Leone">Sierra Leone</li>
										<li data-value="Singapore">Singapore</li>
										<li data-value="Slovakia">Slovakia</li>
										<li data-value="Slovenia">Slovenia</li>
										<li data-value="Solomon Islands">Solomon Islands</li>
										<li data-value="Somalia">Somalia</li>
										<li data-value="South Africa">South Africa</li>
										<li data-value="South Sudan">South Sudan</li>
										<li data-value="Spain">Spain</li>
										<li data-value="Sri Lanka">Sri Lanka</li>
										<li data-value="Sudan">Sudan</li>
										<li data-value="Suriname">Suriname</li>
										<li data-value="Swaziland">Swaziland</li>
										<li data-value="Sweden">Sweden</li>
										<li data-value="Switzerland">Switzerland</li>
										<li data-value="Syria">Syria</li>
										<li data-value="Taiwan">Taiwan</li>
										<li data-value="Tajikistan">Tajikistan</li>
										<li data-value="Tanzania">Tanzania</li>
										<li data-value="Thailand">Thailand</li>
										<li data-value="Togo">Togo</li>
										<li data-value="Tonga">Tonga</li>
										<li data-value="Trinidad & Tobago">Trinidad & Tobago</li>
										<li data-value="Tunisia">Tunisia</li>
										<li data-value="Turkey">Turkey</li>
										<li data-value="Turkmenistan">Turkmenistan</li>
										<li data-value="Tuvalu">Tuvalu</li>
										<li data-value="Uganda">Uganda</li>
										<li data-value="Ukraine">Ukraine</li>
										<li data-value="United Arab Emirates">United Arab Emirates</li>
										<li data-value="United Kingdom">United Kingdom</li>
										<li data-value="United States">United States</li>
										<li data-value="Uruguay">Uruguay</li>
										<li data-value="Uzbekistan">Uzbekistan</li>
										<li data-value="Vanuatu">Vanuatu</li>
										<li data-value="Vatican City">Vatican City</li>
										<li data-value="Venezuela">Venezuela</li>
										<li data-value="Vietnam">Vietnam</li>
										<li data-value="Yemen">Yemen</li>
										<li data-value="Zambia">Zambia</li>
										<li data-value="Zimbabwe">Zimbabwe</li>
									</ul>
								</div><!-- END .custom-select -->
			        		</div><!-- END .row -->
			        		<div class="row">
		        				<h6>What is your phone number and email?</h6>
		        				<div class="phoneFields">
			        				<label for="">Prefix</label>
			        				<span class="mandatory">Fill both fields using only numbers (no spaces or punctuation marks)</span>
			        				<input id="txtPrefix" type="text"/>
			        				<input type="text" id="txtPhoneNumber" />
		        				</div>
		        				<div class="phoneFields">
			        				<label for="">Email</label>
			        				<span class="mandatory">Give us your email address and check there’s no mistakes!</span>
			        				<input type="text" id="txtEmail" />
		        				</div>
		        			</div><!-- END .row -->
			        	</div><!-- END .input-container -->
			        	<div class="input-container">
				        	<label for="txtLinkedin">What is your Linkedin Profile URL?</label>
	        				<span class="mandatory">Give us your profile and check there’s no mistakes!</span>
	        				<input id="txtLinkedin" type="text"/>
			        	</div><!-- END .input-container -->
			        	<div class="input-container">
				        	<label for="txtSkype">What is your Skype username?</label>
	        				<span class="mandatory">Give us your username and check there’s no mistakes!</span>
	        				<input id="txtSkype" type="text"/>
			        	</div><!-- END .input-container -->
			        	<div class="input-container">
				        	<a href="#" id="btnSend" class="btn">Apply</a>	
			        	</div><!-- END .input-container -->
			        	
		        	</form>	
		        <div class="clear"></div>
	        </div><!-- END .container_4 -->
        </section>

        <?php include('includes/footer.php') ?>
        
        <script src="js/vendor/dropzone.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.stellar.min.js"></script>
        
        <script>
	        $(function() { 
	        	// Parallax				
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 134
				});
				
				//Custome Selects
				$('.custom-select p').on('click',function(){
					$(this).parent().find('ul').slideToggle();
				})
				$('.custom-select ul li').on('click',function(){
					var vPElement = $(this).closest(".custom-select").find('p');
					
					//Change the new value
					vPElement.attr('data-value',$(this).attr('data-value'));
					vPElement.html($(this).text() + ' <i class="icon-sort"></i>');
					
					//Toggle the menu
					$(this).parent().slideToggle();
				})

				//Textareas Countdown
				$(".countdown").keyup(function(){
					Charactersleft($(this));
				});
				
				//TextAreass Control Before Post
				$('#btnSend').on('click',function(e){
					e.preventDefault();
					
					//Send the POST only if the checkfield function is OK
					if(CheckFields()){
						//Variables
						var vOpRevenue ="";
						var vFiles = "";
						
						//Get al the Revenue checkboxes
						$('.checks-wrapper input:checked').each(function(){
							if(vOpRevenue != '') {
								vOpRevenue += ", ";
							}
							vOpRevenue += $(this).val();
						});
						
						//Get all the attached files
						$('.dz-filename span').each(function(){
							if(vFiles != '') {
								vFiles += "<br />";
							}
							vFiles += "<a href='<?php echo ($appPath . "/" . $appUploadDirectory . "/"); ?>" + $(this).text() + "' target='_blank'>" + $(this).text() + "</a>";
						});
						
						//Set up the JSON Data
						var vApply = {
				            txtMyIdea: $("#txtMyIdea").val(),
				            txtProblem: $("#txtProblem").val(),
				            txtTarget: $('#txtTarget').val(),
				            opStage: $('.radios-wrapper input:checked').val(),
				            opRevenue: vOpRevenue,
				            txtLogic: $('#txtLogic').val(),
				            txtMena: $('#txtMena').val(),
				            txtProduct1: $('#txtProduct1').val(),
				            txtProduct2: $('#txtProduct2').val(),
				            txtProduct3: $('#txtProduct3').val(),
				            txtUrl1: $('#txtUrl1').val(),
				            txtUrl2: $('#txtUrl2').val(),
				            txtUrl3: $('#txtUrl3').val(),
				            pFiles: vFiles,
				            txtUrlShortVideo: $('#txtUrlShortVideo').val(),
				            videoPass: $('#videoPass').val(),
				            txtPeopleInTeam: $('#txtPeopleInTeam').val(),
				            txtFullName: $('#txtFullName').val(),
				            pDateBirth: $('#txtMonth').attr('data-value') + "/" + $('#txtDay').attr('data-value') + "/" + $('#txtYear').attr('data-value'),
				            pResidence: $('#txtResidence').attr('data-value'),
				            txtPrefix: $('#txtPrefix').val(),
				            txtPhoneNumber: $('#txtPhoneNumber').val(),
				            txtLinkedin: $('#txtLinkedin').val(),
				            txtSkype: $('#txtSkype').val()
				            }
				        
						
						//do ajax
						$.ajax({
							  type: 'POST',
							  url: 'send-email.php',
							  data: vApply,
							  success: function(data){
							    $('p.success').show();
							    $('p.error').hide();
							    cleanForm();
							    $('html, body').animate({scrollTop: 490}, 1500,'easeInOutCirc')
							  },
							  error: function(xhr, type, exception) { 
							    // if ajax fails display error alert
							    $('p.error').text(xhr.responseText).show();
							    $('p.success').hide();
							    $('html, body').animate({scrollTop: 490}, 1500,'easeInOutCirc')
							  }
							});
					}
					else{
						//Show the error message in the top of the page
						$('p.error').show();
						
						//Scroll the window to the top
						$('html, body').animate({scrollTop: 490}, 1500,'easeInOutCirc')
					}
				});
				
				//This function checks if all the fields are OK to submit
				function CheckFields(){
					var vFieldsFlag = true;
					
					//Textareas
					$('textarea').each(function(){
						var vTextAreaWrapper = $(this).closest('.textarea-wrapper');
						if($(this).val()==""){
							$(vTextAreaWrapper).addClass('exceed');
							$(vTextAreaWrapper).closest('.input-container').find('.mandatory').show();
							
							vFieldsFlag = false;
							console.log('Error en: (1)');
						}
						else{
							$(vTextAreaWrapper).closest('.input-container').find('.mandatory').hide();
						}
					});
					
					//Checkboxes
					if ($('.checks-wrapper input:checked').length == 0){
						$('.checks-wrapper .mandatory').show();
						vFieldsFlag = false;
						console.log('Error en: (2)');
					}
					else{
						$('.checks-wrapper .mandatory').hide();
					}
					
					//Text Inputs
					$('#txtFullName, #txtPrefix, #txtPhoneNumber, #txtLinkedin, #txtSkype, #txtEmail').each(function(){
						if($(this).val() == ''){
							$(this).parent().find('.mandatory').css('display','block');
							vFieldsFlag = false;
							console.log('Error en: (3)');
						}
						else{
							$(this).parent().find('.mandatory').hide();
						}
	
					});
										
					return vFieldsFlag;
				}
				
				//This function cleans the form
				function cleanForm(){
					$('input[type="text"], textarea').val('');
					$('textarea').each(function(){
						Charactersleft($(this));
					});
					$('#project-idea').prop('checked', true);
					$('.checks-wrapper input').removeAttr('checked');
					$('#uploadead-files > *').remove();
					$('#txtPeopleInTeam').val('0');
					$('#txtMonth').attr('data-value','01').text('January');
					$('#txtDay').attr('data-value','01').text('01');
					$('#txtYear').attr('data-value','1970').text('1970');
					$('#txtResidence').attr('data-value','Bahrain').text('Bahrain');
				}
				function Charactersleft(pElement){
					vSpan = $(pElement).parent().find('span');
					
					//MaxLenght of the textarea
					vMaxLenght = parseInt($(pElement).attr('data-Maxlength'));
					
					//Actual characters in the textarea
					var vActual = parseInt($(pElement).val().length);
					var vRemains = vMaxLenght - vActual;
					
					//Change the counter
					vSpan.text(vRemains);
					
					//Change the colour depending on its remains characteres
					
					if(vRemains > 30){
						$(pElement).parent().removeClass('warning exceed');
					}
					else if(vRemains >= 0 && vRemains <= 30){
						$(pElement).parent().removeClass('exceed').addClass('warning');
					}
					else if(vRemains < 0){
						$(pElement).parent().removeClass('warning').addClass('exceed');
					}
				}
			});
			
			
			//Drag & Drop File Upload
			var fileList = new Array();
			var myDropzone = new Dropzone("#fileHolder", { 
				acceptedFiles: ".pdf,.doc,.docx,.txt,.rtf,.jpg,.jpeg,.png,.gif",
				addRemoveLinks: true,
				autoProcessQueue: true,
				createImageThumbnails:false,
				url: "upload.php",
				previewsContainer: "#uploadead-files",
				dictRemoveFile: 'Delete'
			});
			myDropzone.on('dragstart',function(){
				$(this).addClass('hover');
			});
			myDropzone.on('dragleave',function(){
				$(this).removeClass('hover');
			});
			myDropzone.on('removedfile',function(file){
				$.ajax({
					  type: "POST",
					  url: "remove.php",
					  data: { filename: file.name }
					});
			});
			
			
        </script>
    </body>
</html>
