<div id="navBarContainer">

                <div class="navBar">
                    <span  role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
                        <img src="assets/images/icons/VoxBeatsCover.png" title="Home">
                    </span>

					<div class="group">

						<div class="navItem">
						<span  role='link' tabindex='0' onclick='openPage("search.php")' class="navItemLink" >
							Search
								<img src="assets/images/icons/search.png" alt="Search">
                        </span>
						</div>

					</div>
						
					<div class="group">

						<!-- <div class="navItem">
						<span  role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
						</div> -->

						<div class="navItem">
						<!-- <span target= role="link" tabindex="0" onclick="openPage('Drum Simulation/drum.php')" class="navItemLink">Drum Simulation</span> -->
						<a href="http://localhost/VoxBeats/Drum%20Simulation/drum.php?" target="blank" style="color: a0a0a0;">Drum Simulation</a>
						</div>

						
						<div class="navItem">
							<span  role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
						</div>

						<div class="navItem">
						<span  role="link" tabindex="0" onclick="openPage('index1.php')" class="navItemLink">Visitor's Page</span>
						</div>
						
						<div class="navItem">
						<span  role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
						</div>

					</div>

                </div>

            </div>