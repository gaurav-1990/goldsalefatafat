var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {
//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
$('#add_more').click(function() {
$(this).before($("<div/>", {
id: 'filediv'
}).fadeIn('slow').append($("<input/>", {
name: 'file[]',
type: 'file',
id: 'file'
}), $("<br/><br/>")));
});
// Following function will executes on change event of file input to select different file.
$('body').on('change', '#file', function() {
if (this.files && this.files[0]) {
abc += 1; // Incrementing global variable by 1.
var z = abc - 1;
var x = $(this).parent().find('#previewimg' + z).remove();
$(this).before("<div id='abcd" + abc + "' class='abcd'><img  style='width:150px' id='previewimg" + abc + "' src=''/></div>");
var reader = new FileReader();
 
reader.onload = imageIsLoaded;
	 
reader.readAsDataURL(this.files[0]);

$(this).hide();
$("#abcd" + abc).append($(" <i class='fa fa-times'></i>", {
id: 'img',
src: 'x.png',
alt: 'delete'
}).click(function() {
$(this).parent().parent().remove();
}));
}
});
// To Preview Image
function imageIsLoaded(e) {
  var image = new Image();

    image.src =e.target.result;
    var flag=0;
    //image.onload = function() {
         //if(image.width!=image.height)
        // {
 	       //alert("Please upload image of same height and width");
 	     //  flag=1;
 	     //  return false;
         //}
    //}
    
if(flag==0)
{
  $('#previewimg' + abc).attr('src', e.target.result);
 }       

};
$('#upload').click(function(e) {
var name = $(":file").val();
if (!name) {
alert("First Image Must Be Selected");
e.preventDefault();
}
});
});

const deletePImage=(e,id)=>{
	 
	 $.ajax({
	 	type:"POST",
	 	url :"deleteImage.php",
	 	data:{img:id},
	 	success:function(data)
	 	{
	 		 if(data.trim()==1)
	 		 {
	 		 	$(e).parent().siblings("input[type='hidden']").remove();
	 		 	$(e).parent().hide();
	 		 	$(e).hide();

	 		 }else
	 		 {

	 		 }
	 	}
	 })
}