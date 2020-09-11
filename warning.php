
<head>
	<!-- Favicon -->
	<link href="img/icons/icon.jpg" rel="shortcut icon"/>
</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body onLoad="popUp()">

<script>
  function popUp(){

    swal({
  title: "Can't Apply!!",
  text: "You are signed In as a Recruiter",
  icon: "warning",
  button:"OK",
}).then(function() {
   window.location ="job.php";
});
  }
</script>
</body>