var image_value = 'false';
function change(){
var image=document.getElementById('pic');
if (image_value=='false'){
image.src="1 (2).jpg";
image_value = 'true';
}
else if(image_value=='true'){
image.src = 'pics/1 (12).jpg';
image_value = 'yes';
}
else{
image.src = 'pics/1 (3).jpg';
image_value = 'false';
}
}
var timer = setInterval('change()',4000);
