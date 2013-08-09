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
	        	<header class="grid_4">
		        	<h5>YOUR IDEA/PROJECT</h5>
		        	<div></div><!-- line -->
	        	</header>
	        	<div class="grid_4">
		        	<form action="send-form.php">
		        		<div class="input-container">
			        		<label for="txtMyIdea">Describe your idea/project in 400 characters</label>
			        		<div class="textarea-wrapper">
				        		<textarea name="txtMyIdea" id="txtMyIdea" maxlength="400"></textarea>
				        		<span>400</span>
			        		</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container">
			        		<label for="txtProblem">What problem or customer pain does your idea/project intend to solve?</label>
			        		<div class="textarea-wrapper">
				        		<textarea name="txtProblem" id="txtProblem" maxlength="400"></textarea>
				        		<span>400</span>
			        		</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container">
			        		<label for="txtTarget">Who is your target audience and what makes your solution unique?</label>
			        		<div class="textarea-wrapper">
				        		<textarea name="txtTarget" id="txtTarget" maxlength="475"></textarea>
				        		<span>475</span>
			        		</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container radios-wrapper">
		        			<h6>What stage is your business at?</h6>
		        			<input type="radio" checked="checked" name="opStage" id="project/idea" value="Project/idea"/><label for="project/idea">Project/idea</label>
		        			<input type="radio" name="opStage" id="demo" value="Demo"/><label for="demo">Demo</label>
		        			<input type="radio" name="opStage" id="finished-product" value="Finished Product"/><label for="finished-product">Finished Product</label>
		        			<input type="radio" name="opStage" id="already-launched" value="Already launched"/><label for="already-launched">Already launched</label>
		        		</div><!-- END .input-container -->
		        		<div class="input-container checks-wrapper">
		        			<h6>How will you get revenue?</h6>
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
		        			<p>Explain the logic behind your selections</p>
		        			<div class="textarea-wrapper">
		        				<textarea name="txtLogic" id="xtLogic" maxlength="500"></textarea>
		        				<span>500</span>
		        			</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container">
			        		<label for="txtMena">Why do you think your idea/project is suitable for the MENA Market?</label>
			        		<div class="textarea-wrapper">
				        		<textarea name="txtMena" id="txtMena" maxlength="500"></textarea>
				        		<span>500</span>
			        		</div><!-- END .textarea-wrapper -->
		        		</div><!-- END .input-container -->
		        		<div class="input-container" id="similar-products">
		        			<h6>Name some similar products in regional or international markets (include the URL if possible)</h6>
		        			<p class="optional">Optional</p>
		        			<div class="product">
			        			<label for="txtProduct1">1 - </label><input type="text" id="txtProduct1" name="txtProduct1" />
			        			<label for="txtUrl1">URL </label><input type="text" id="txtUrl1" name="txtUrl1" placeholder="http://" />
		        			</div>
		        			<div class="product">
			        			<label for="txtProduct2">2 - </label><input type="text" id="txtProduct2" name="txtProduct2" />
			        			<label for="txtUrl2">URL </label><input type="text" id="txtUrl2" name="txtUrl2" placeholder="http://" />
		        			</div>
		        			<div class="product">
			        			<label for="txtProduct2">3 - </label><input type="text" id="txtProduct3" name="txtProduct3" />
			        			<label for="txtUrl3">URL </label><input type="text" id="txtUrl3" name="txtUrl3" placeholder="http://" />
		        			</div>
		        		</div><!-- END .input-container -->
		        		<div class="input-container" id="similar-products">
		        			<h6>Upload documents if you consider they will help us get a better understanding of your project</h6>
		        			<p class="subtitle">3 files max, 20MB max each. Bios of the team mebers, Business Plan, Business Presentation, etc)</p>
		        			<p class="optional">Optional</p>
		        			
		        			<div id="uploadead-files" class="dropzone-previews"></div>
		        			<span id="fileHolder">Drag and drop your files here or click to browse</span>
		        		</div><!-- END .input-container -->
		        	</form>	
	        	</div><!-- END .grid_4 -->
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
			});
			
			
			//Drag & Drop File Upload
			var fileList = new Array();
			var myDropzone = new Dropzone("#fileHolder", { 
				acceptedFiles: ".pdf,.doc,.docx,.txt,.rtf",
				addRemoveLinks: true,
				autoProcessQueue: true,
				url: "helpers/upload.php",
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
				console.log(file.name);
			});
			
			
        </script>
    </body>
</html>
