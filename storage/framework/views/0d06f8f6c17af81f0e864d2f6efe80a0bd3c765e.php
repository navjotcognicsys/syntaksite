
<!DOCTYPE html>
<html lang="en">
	<head>
		
		<style>
			
			#popup {
				width: 1200px;
				height: 600px;
				background:white;
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				box-shadow: 2px 2px 5px 3px white;
			}
                             input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.close-btn {
			position: absolute;
			right: 20px;
			margin-top: 5px;
			background-color: powderblue;
			color: white;
			border-radius: 20%;
			padding: 10px;
            cursor: pointer;
		}
        h1{
            color :royalblue;
            margin-left: 370px;
        }
        p{
           
            margin-left: 340px;
        }
			
		</style>
	</head>

	<body>
		
		<div class="POPmain"
			style="display: none;">
			<div id="popup">
				<div class="container">
  <form action="action_page.php">
    <div class="content">
		<div onclick="togglePopup()" class="close-btn">
			×
		</div>
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <h1>Tell us about your project</h1>
                    <p>We’ll contact with you in a couple of hours to schedule a meeting to discuss your goals</p>
    
       
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <input type="text"placeholder="name">
                        <input type="text"placeholder="email">
                        <input type="text"placeholder="contact">
                        <input type="text"placeholder="message">

                    </form>
                </div>
                <div class="col-md-6">
                <img src="assets/images/shape/service-shape1.png" alt="Images">
                </div>
        
        </div>
        </div>
        
            </div>
            </div>
    </div>
  </form>
</div>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first,then Popper.js,then Bootstrap JS -->
		<script src=
"https://code.jquery.com/jquery-3.2.1.slim.min.js"
				integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
				crossorigin="anonymous"></script>

		<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				crossorigin="anonymous"></script>

		<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
				crossorigin="anonymous"></script>
		<script>
			// When document is ready
			$(document).ready(function () {
				// SetTimeout function
				// Will execute the function
				// after 3 sec
				setTimeout(function () {
					$(".POPmain").css("display", "block");
				}, 2500);
			});
			$(".submitId").click(function () {
				$(".POPmain").css("display", "none");
			});
                           
		// Function to show and hide the popup
		function togglePopup() {
			$("#popup").toggle();
		}
	</script>
	
	</body>
</html>
<?php /**PATH C:\xampp\xamppp\htdocs\syntaxmantra\resources\views/popup.blade.php ENDPATH**/ ?>