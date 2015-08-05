<?php get_header(); ?>
			
	<div id="page-contact" class="content row">
		<nav id="page-navigation">
			<ul>
				<li><a href="<? bloginfo('wpurl'); ?>/about/" title="About The Times">About</a></li>
				<li><a href="<? bloginfo('wpurl'); ?>/advertise/" title="Advertise in The Times">Advertise</a></li>
				<!-- <li><a href="<? bloginfo('wpurl'); ?>/donate/" title="Donate to The Times">Donate</a></li> -->
				<li><a href="<? bloginfo('wpurl'); ?>/join/" title="Join The Times">Join</a></li>
				<!-- <li><a href="<? bloginfo('wpurl'); ?>/staff/" title="Faces behind The Times">Staff</a></li> -->
				<li class="active"><a href="<? bloginfo('wpurl'); ?>/contact/" title="Contact The Times">Contact</a></li>
			</ul>
		</nav>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<section class="row post">
			<div class="span16">
				<?php the_content(); ?>
			</div>
			<div class="span8 last">
				<dl id="contact-list">
					<dt>Advertising:</dt>
						<dl><a href="mailto:business@aprtimes.com">business@aprtimes.com</a></dl>
					<dt>Corrections:</dt>
						<dl><a href="mailto:editor@aprtimes.com" title="Submit a correction">editor@aprtimes.com</a></dl>
					<dt>Letter to the editor:</dt>
						<dl><a href="mailto:editor@aprtimes.com">editor@aprtimes.com</a></dl>
					<dt>News tips:</dt>
						<dl><a href="mailto:news@aprtimes.com">news@aprtimes.com</a></dl>
				</dl>
			</div>
		</section>
	</div>
	<?php get_footer(); ?>