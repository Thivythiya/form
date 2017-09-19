function create(){
	var name = document.getElementById('name1').value;
	var email = document.getElementById('email1').value;
	var uname = document.getElementById('uname1').value;
	var birth = document.getElementById('birth1').value;
	var mbl = document.getElementById('mbl1').value;
	var pass = document.getElementById('pass1').value;
	var datastr = 'Name=' + name + "&Email=" +  email + "&Username=" + uname +  "Date_of_birth=" + birth + "Mobile_number=" + mbl + "&Password=" + pass;

	if (name == '' || email == '' || password == '' || contact == '') {
	alert("Please Fill All Fields");
	} else {
	// $.ajax({
	// 	type: "POST",
	// 	url: "ajaxprocess.php",
	// 	data: datastr,
	// 	cache: false 
	// });

	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "ajaxprocess.php", true);
	xhttp.send();
	}
  }