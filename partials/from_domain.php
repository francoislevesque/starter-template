<?php

$domain = 'no_domain';

if (array_key_exists('HTTP_REFERER', $_SERVER)) {
	$domain = strstr($_SERVER['HTTP_REFERER']);
}

?>

<!-- Domain Modal -->
<div class="modal fade" id="domain_modal" tabindex="-1" role="dialog" aria-labelledby="domain_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h1><?php echo $domain; ?></h1>
                <span>is on sale!</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, eveniet nisi eius qui necessitatibus exercitationem, quam suscipit harum, nostrum reprehenderit nobis error maxime expedita magnam dolores doloribus. Reprehenderit, qui, facilis.</p>
                <button type="button" class="btn" data-dismiss="modal">Visit our website</button>
            </div>
        </div>
    </div>
</div>

<script>
	var domain = '<?php echo $domain ?>';

	if (domain != 'no_domain') {
		$('#domain_modal').modal('show');
	}

</script>
