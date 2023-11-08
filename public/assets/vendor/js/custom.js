$(function () {
	$('#image').change(function (e) {
		let reader = new FileReader();
		reader.onload = function (e) {
			$('#showImage').attr('src', e.target.result);
		};
		reader.readAsDataURL(e.target.files[0]);
		console.log(reader);
	});
});

let table = new DataTable('#table', {
	paging: true,
	scrollY: 400,
	ordering: true,
	select: true,
	autoWidth: true,
	searching: true,
	pageLength: 20,
	pagingTag: 'button',
	pagingType: 'simple_numbers',
});
