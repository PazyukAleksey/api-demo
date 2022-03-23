<?php
get_header();
?>
	<form action="wp-json/api-test/create-tokken" method="post">
        <input type="text" name="token">
        <button>submit</button>
	</form>
<?php
get_footer();
