<script>
	$j(function(){
		var tn = 'books';

		/* data for selected record, or defaults if none is selected */
		var data = {
			Book_Type: { id: '<?php echo $rdata['Book_Type']; ?>', value: '<?php echo $rdata['Book_Type']; ?>', text: '<?php echo $jdata['Book_Type']; ?>' }
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for Book_Type */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Book_Type' && d.id == data.Book_Type.id)
				return { results: [ data.Book_Type ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

