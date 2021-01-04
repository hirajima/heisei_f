<nav class="pankuzu">
		<div class="pankuzu_inner">
			<ul class="pankuzu_list">
				<li class="pankuzu_item"><a href="/">TOP</a></li>
				<li class="pankuzu_item">
					<?php
				if (isset($title)) {
					echo $title;
				} else{
					echo get_the_title();
				}
				 ?></li>
			</ul>
		</div>
</nav>
