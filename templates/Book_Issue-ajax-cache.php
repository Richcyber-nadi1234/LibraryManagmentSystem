<script>
	$j(function(){
		var tn = 'Book_Issue';

		/* data for selected record, or defaults if none is selected */
		var data = {
			Member: { id: '<?php echo $rdata['Member']; ?>', value: '<?php echo $rdata['Member']; ?>', text: '<?php echo $jdata['Member']; ?>' },
			Number: '<?php echo $jdata['Number']; ?>',
			Book_Number: { id: '<?php echo $rdata['Book_Number']; ?>', value: '<?php echo $rdata['Book_Number']; ?>', text: '<?php echo $jdata['Book_Number']; ?>' },
			Book_Title: '<?php echo $jdata['Book_Title']; ?>'
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for Member */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Member' && d.id == data.Member.id)
				return { results: [ data.Member ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Member autofills */
		cache.addCheck(function(u, d){
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'Member' && d.id == data.Member.id){
				$j('#Number' + d[rnd]).html(data.Number);
				return true;
			}

			return false;
		});

		/* saved value for Book_Number */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Book_Number' && d.id == data.Book_Number.id)
				return { results: [ data.Book_Number ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Book_Number autofills */
		cache.addCheck(function(u, d){
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'Book_Number' && d.id == data.Book_Number.id){
				$j('#Book_Title' + d[rnd]).html(data.Book_Title);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

