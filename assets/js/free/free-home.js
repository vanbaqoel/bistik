jQuery(function($) {
	$('.chosen-select').chosen(); 

	$.getJSON("pemesanan/populate_kota", function(json){
        kdprov = "0";
        kotaData = json.data;
        myOptions = "<option value=''></option>";
        $.each(kotaData, function(i){
        	if (kotaData[i].kd_provinsi != kdprov) {		        		
        		if (i != 0) {
        			myOptions += "</optgroup>";
        		}
        		myOptions += "<optgroup label='" + kotaData[i].nm_provinsi + "'>";			        	
        		kdprov = kotaData[i].kd_provinsi;
        	}
            myOptions += "<option value='" + kotaData[i].kd_kota + "' data-subtext='" + kotaData[i].nm_provinsi + "'>" + kotaData[i].nm_kota + "</option>";
        });
        myOptions += "</optgroup>";

        $('.chosen-select').empty();
        $('.chosen-select').append(myOptions);
        $('.chosen-select').trigger("chosen:updated");
    });
	
	if(!ace.vars['touch']) {
			
		//resize the chosen on window resize

		$(window)
		.off('resize.chosen')
		.on('resize.chosen', function() {
			$('.chosen-select').each(function() {
				 var $this = $(this);
				 $this.next().css({'width': $this.parent().width()});
			})
		}).trigger('resize.chosen');
	}

	$('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true,
			startDate: new Date(),
			endDate: '+30d'
		})
		//show datepicker when clicking on the icon
		.next().on(ace.click_event, function(){
			$(this).prev().focus();
		});
		
	$('.date-picker').datepicker('setDate', '+1d');

    $('#cbo-asal').change(function(e) {
        $('#frm-cari-jadwal').formValidation('revalidateField', 'cbo-asal');
    });

    $('#cbo-tujuan').change(function(e) {
        $('#frm-cari-jadwal').formValidation('revalidateField', 'cbo-tujuan');
    });

	$('#frm-cari-jadwal').formValidation({
		framework: 'bootstrap',
        fields: {
        	'dtp-tanggal': {
        		validators: {
        			notEmpty: {
                        message: 'Tidak boleh kosong'
                    }
                }
        	},
        	'cbo-asal': {        		
	            excluded: false,
        		validators: {
        			notEmpty: {
                        message: 'Tidak boleh kosong'
                    }
                }
        	},
        	'cbo-tujuan': {        		        		
	            excluded: false,
        		validators: {
                    notEmpty: {
                        message: 'Tidak boleh kosong'
                    }
                }
        	},
        	'txt-penumpang': {
                validators: {
                    notEmpty: {
                        message: 'Tidak boleh kosong'
                    },
                    numeric: {
                        message: 'Hanya boleh angka'
                    },
                    greaterThan: {
                        message: 'Angka minimal adalah 1'
                    }
            	}
            }
        }
	});
});