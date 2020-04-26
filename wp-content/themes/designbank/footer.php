<?php
?>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<p>Copyright <?php the_date('Y')?> SAS IT Team. All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>

	<?php wp_footer(); ?>
	<script>
jQuery(function($){
$('#filter').submit(function(){
    var filter = $('#filter');
    $.ajax({
        url:filter.attr('action'),
        data:filter.serialize(), // form data
        type:filter.attr('method'), // POST
        beforeSend:function(xhr){
            filter.find('button').text('Processing...'); // changing the button label
        },
        success:function(data){
            filter.find('button').text('Apply filter'); // changing the button label back
            $('#response').html(data); // insert data
        }
    });
    return false;
});
});


	</script>
</body>

</html>

