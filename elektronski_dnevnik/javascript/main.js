jQuery(document),ready(function ($) {
	$("#pupload").click(function (e) {
e.preventDefault();


let file_temp = $("#photoss input").val();

if(file_temp.includes(searchElement: '.png') || file_temp.includes(searchElement: '.jpg') || file_temp.includes(searchElement: 'jpeg')) {
	$("#photoss").submit();
} else {
	alert('File must be .png, .jpg or .jpeg');
	}
});
	