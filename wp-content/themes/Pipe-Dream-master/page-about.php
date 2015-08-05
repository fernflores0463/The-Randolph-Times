<?php get_header(); ?>
			
	<div id="page-about" class="content row">
		<nav id="page-navigation">
			<ul>
				<li class="active"><a href="<? bloginfo('wpurl'); ?>/about/" title="About The Times">About</a></li>
				<li><a href="<? bloginfo('wpurl'); ?>/advertise/" title="Advertise in The Times">Advertise</a></li>
				<!-- <li><a href="<? bloginfo('wpurl'); ?>/donate/" title="Donate to The Times">Donate</a></li> -->
				<li><a href="<? bloginfo('wpurl'); ?>/join/" title="Join The Times">Join</a></li>
				<!-- <li><a href="<? bloginfo('wpurl'); ?>/staff/" title="Faces behind The Times">Staff</a></li> -->
				<li><a href="<? bloginfo('wpurl'); ?>/contact/" title="Contact The Times">Contact</a></li>
			</ul>
		</nav>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<section class="row post">
			<div data-column="left-column" class="span15">
				<?php the_content(); ?>
			</div>

			<div class="sidebar span9 last">
				<section id="masthead">
					<ul>
                    	<li>
							<span class="board">Faculty Advisors</span>
							<ul>
								<li>Joann Mariani</li>
                                <li>Mr. Predovan</li>
							</ul>
						</li>
						<li>
							<span class="board">Editors-in-Chief</span>
							<ul>
								<li>Fernando Flores, '15</li>
                                <li>Justin Rivera, '17</li>
							</ul>
						</li>
						<li>
							<span class="board">Managing Editor</span>
							<ul>
								<!--<li>Paige Nazinitsky, '14</li>-->
							</ul>
						</li>
						<li>
							<span class="board">Business</span>
							<ul>
								<!--<li>Zachary Hindin, '14, <em>Business Manager</em></li>-->
							</ul>
						</li>
						<li>
							<span class="board">News</span>
							<ul>
								<!--<li>Rachel Bluth, '16, <em>News Editor</em></li>
								<li>Nicholas Vega, '16, <em>Assistant News Editor</em></li>
								<li>Davina Bhandari, '15, <em>Assistant News Editor</em></li>
								<li>Geoffrey Wilson, '14, <em>Assistant News Editor</em></li>-->
							</ul>
						</li>
						<li>
							<span class="board">Sports</span>
							<ul>
								<!--<li>Ari Kramer, '14, <em>Sports Editor</em></li>
								<li>Erik Bacharach, '14, <em>Assistant Sports Editor</em></li>
								<li>Ashley Purdy, '15, <em>Assistant Sports Editor</em></li>-->
							</ul>
						</li>
						<li>
							<span class="board">Photo</span>
							<ul>
								<!--<li>Kendall Loh, '14, <em>Photo Editor</em></li>
								<li>Janine Furtado, '14, <em>Assistant Photo Editor</em></li>-->
							</ul>
						</li>
						<li>
							<span class="board">Opinion</span>
							<ul>
								<!--<li>Michael Snow, '14, <em>Opinion Editor</em></li>-->
							</ul>
						</li>
						<!--<li>
							<span class="board">Release</span>
							<ul>
								<li>Darian Lusk, '14, <em>Release Editor</em></li>
								<li>Jacob Shamsian, '15, <em>Assistant Release Editor</em><li>
							</ul>
						</li>-->
						<li>
							<span class="board">Layout</span>
							<ul>
								<li>Fernando Flores, '15, <em>Design Manager</em></li>
								<li>Leslie Enofe, '14, <em>Design Assistant</em></li>
								<!--<li>Cari Snider, '14, <em>Design Assistant</em></li>-->
							</ul>
						</li>
						<li>
							<span class="board">Copy Desk</span>
							<ul>
								<li>Elianna Lanfranco, '15, <em>Copy Desk Chief</em></li>
								<!--<li>Sammie Ruthenberg, '14, <em>Assistant Copy Desk Chief</em></li>-->
							</ul>
						</li>
						<li>
							<span class="board">Art</span>
							<ul>
								<li>Joni Cosbert, '15, <em>Comic Strip</em></li>
							</ul>
						</li>
						<li>
							<span class="board">Editorial Artist</span>
							<ul>
								<!--<li>Miriam Geiger, '15, <em>Editorial Artist</em></li>-->
							</ul>
						</li>
						<li>
							<span class="board">Web</span>
							<ul>
								<li>Fernando , '15, <em>Lead Web Developer</em></li>
								<!--<li>Daniel O'Connor, '14, <em>Server Administrator</em></li>
								<li>Shavonna Q. Hinton, '15, <em>Social Media Manager</em></li>
								<li>Keara Hill, '16, <em>Social Media Manager</em></li>-->
							</ul>
						</li>
						<li>
							<span class="board">Technology</span>
							<ul>
								<!--<li>Will Sanders, '16, <em>Newsroom Tech Manager</em></li>-->
							</ul>
						</li>
					</ul>
				</section>
			</div>
		</section>
	</div>
	<?php get_footer(); ?>