var Demo = (function() {	

	function popupResult(result) {
		var html;
		if (result.html) {
			html = result.html;
		}
		if (result.src) {
			html = '<img src="' + result.src + '" />';
		}
		swal({
			title: '',
			html: true,
			text: html,
			allowOutsideClick: true
		});
		setTimeout(function(){
			$('.sweet-alert').css('margin', function() {
				var top = -1 * ($(this).height() / 2),
					left = -1 * ($(this).width() / 2);

				return top + 'px 0 0 ' + left + 'px';
			});
		}, 1);
	}
	
	function demoUpload() {
		var $uploadCrop;

		function readFile(input) {
 			if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            
	            reader.onload = function (e) {
					$('.upload-demo').addClass('ready');
	            	$uploadCrop.croppie('bind', {
	            		url: e.target.result
	            	}).then(function(){
	            		console.log('jQuery bind complete');
	            	});
	            	
	            }
	            
	            reader.readAsDataURL(input.files[0]);
	        }
	        else {
		        swal("Sorry - you're browser doesn't support the FileReader API");
		    }
		}
		$uploadCrop = $('#upload-demo').croppie({
			enableExif: true,
			viewport: {
				width: 200,
				height: 200,
				//type: 'circle'
			},
			boundary: {
				width: 300,
				height: 300
			}
		});

		$('#uploadAvatar').on('change', function (){ 
			readFile(this); 
			
			$('.ep-bg').fadeToggle();
	        $('.ep-popup').fadeToggle();
			
	        $('.crop-ep-popup').fadeToggle();
			$('.crop-ep-popup').css('z-index', 3000);
		});
		
		$('.upload-result').on('click', function (ev) {
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function (resp) {
				
				var dta 	= {
					img : resp
				};
				$.ajax({ 
					url: '/ajax/user-upload-avatar-profiles',
					type: 'POST',
					data: dta
				}).done(function(response) 
				{
					if(!response.error)
					{
						location.reload();
					}
					else
					{
						alert(response.msg);
					}
				});
				
			});
		});
	}
	function init() {
		demoUpload();
	}

	return {
		init: init
	};
})();	