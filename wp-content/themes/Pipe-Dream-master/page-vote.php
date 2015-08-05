<?php get_header(); ?>
			
	<div id="page-about" class="content row">
		<nav id="page-navigation">
			<ul>
				<li class="active"><a href="<? bloginfo('wpurl'); ?>/vote/" title="SGO Elections">SGO Elections</a></li>
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
					<object align="middle"><form method="post" action="http://poll.pollcode.com/12659353"><div style="background-color:#EEEEEE;padding:2px;width:291px;font-family:Arial;font-size:small;color:#000000;box-shadow: 0px 0px 5px #888;"><div style="padding:2px 0px 4px 2px;"><strong>Vote for your President.</strong></div><input type="radio" name="answer" value="1" id="answer126593531" style="float:left;" /><label for="answer126593531" style="float:left;width:266px;">Wilfredo De Jesus</label><div style="clear:both;height:2px;"></div><input type="radio" name="answer" value="2" id="answer126593532" style="float:left;" /><label for="answer126593532" style="float:left;width:266px;">Rugiatu Kamara</label><div style="clear:both;height:2px;"></div><div align="center" style="padding:3px;"><input type="submit" value=" Vote ">&nbsp;<input type="submit" name="view" value=" View "></div><div align="right" style="font-size:10px">pollcode.com <a href="http://pollcode.com/">free polls</a></div></div></form></object>
				</section>
			</div>
		</section>
	</div>
	<?php get_footer(); ?>