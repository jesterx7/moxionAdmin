$(document).ready(function() {
	function inputImage(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('.display_image').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$('#photo_data').change(function() {
		inputImage(this);
	})
});