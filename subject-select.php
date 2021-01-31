<form method="POST" action="includes/subject.inc.php" class="subject">
		<label for="subject-selector">Subject:</label>
		<select name="subject-selector" onchange="this.form.submit()">
		  <option value="">Select</option>
		  <?php
			
			$subjectOptions = array(
				"mathematics" => "Math",
				"science" => "Science",
			);
			if(isset($_GET["subject"])){
				$problem = $_GET["subject"];
				foreach($subjectOptions as $option => $value){
					if($problem == $option){
						?> <option value="<?php echo $option ?>" <?php echo "selected" ?>> <?php echo $value ?> </option> <?php
					} else {
						?> <option value="<?php echo $option ?>"> <?php echo $value ?> </option> <?php
					}
				}
			} else {
				foreach($subjectOptions as $option => $value){
					?> <option value="<?php echo $option ?>"> <?php echo $value ?> </option> <?php
				}
			}
		  ?>
		</select>
</form>