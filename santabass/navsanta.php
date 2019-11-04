<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="indexsanta.php">This is Santabass</a></li>
							<li><a href="signupformsanta.php">Sign_up</a></li>
							  <?php
								if(!isset($_SESSION['id']))
									echo '<li><a href="loginsanta.html"/>login</a></li>';
								else
									echo '<li><a href="logoutsanta.php"/>logout</a></li>';
								?>
							
							<li><a href="reviewsanta.php">Review</a></li>
							<li><a href="photossanta.php">Photos</a></li>
							<li><a href="eventsanta.php">Event_Information</a></li>
							<li><a href="freesanta.php">Free_Topic</a></li>
						</ul>
						<ul class="icons">
							<li><a href="https://www.facebook.com/choiminseoky" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/mindorii/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://github.com/mindori0105" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>
