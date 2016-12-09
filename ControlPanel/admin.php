<?
    require ("include/dbWrapperClass.php");
    require ("include/config.php");
    require ("include/function.php");

    if(isset($_POST['btn-login'])) {
		if($_POST['type'] == 'admin') {
        $sql = "SELECT * FROM `settings` where id=:id AND admin_username=:username AND admin_password=:password";
        $data[id] = '1';
        $data[username] = $_POST['username'];
        $data[password] = $_POST['password'];
    	$rowCount = $pdo->pdoExecute($sql,$data);
   		if($pdo->pdoRowCount($rowCount) == '1') {
			$result = $pdo->pdoGetRow($sql,$data);
			$_SESSION['username'] = $result['admin_username'];
			$_SESSION['type'] = 'admin';
			header('Location: ?process=succes');

		} else {
			header('Location: ?process=eroor');

			 }
	}
			if($_POST['type'] == 'supervisor') {
        $sql = "SELECT * FROM `settings` where id=:id AND supervisor_username=:username AND supervisor_password=:password";
        $data[id] = '1';
        $data[username] = $_POST['username'];
        $data[password] = $_POST['password'];
    	$rowCount = $pdo->pdoExecute($sql,$data);
   		if($pdo->pdoRowCount($rowCount) == '1') {
			$result = $pdo->pdoGetRow($sql,$data);
			$_SESSION['username'] = $result['supervisor_username'];
			$_SESSION['type'] = 'supervisor';
			header('Location: ?process=succes');

		} else {
			header('Location: ?process=eroor');

			 }
	}
	}

?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= $site_name ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

<link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/droid-arabic-kufi" rel="stylesheet" type="text/css"/>

	<!-- LanderApp's stylesheets -->
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->

</head>


<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'     - Sets text direction to right-to-left
-->
<body class="<?= $theme_color ?> page-signin-alt right-to-left">




<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
	<div class="signin-header">
		<a href="index.html" class="logo">
			<strong><?= $site_name ?></strong>
		</a> <!-- / .logo -->
	</div> <!-- / .header -->

	<h1 class="form-header">الدخول الى لوحة التحكم</h1>


	<!-- Form -->
	<form action="" method="post" class="panel" id="signin-form_id">
    		<? if($_GET['process'] == 'eroor'){ ?>
		<div class="alert alert-danger" role="alert">خطأ في البيانات قم بالمحاولة مرة أخرى</div>
<?  } ?> 

<? if($_GET['process'] == 'succes'){ ?>
		<div class="alert alert-success" role="alert">تم تسجيل دخولك بنجاح, سيتم تحويلك خلال 3 ثواني</div>
		<meta http-equiv="refresh" content="3;URL=index.php"> 
        <? } else { ?>
		<div class="form-group">
			<input name="username" type="text" class="form-control input-lg" id="username_id" placeholder="اسم المستخدم">
		</div> <!-- / Username -->

		<div class="form-group signin-password">
			<input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="كلمة المرور">
		</div> <!-- / Password -->
        
		<div class="form-group">
        <select name="type" class="form-control input-lg" id="type">
          <option value="admin">مدير</option>
          <option value="supervisor">مشرف</option>
        </select>
	  </div> <!-- / Username -->


		<div class="form-actions">
			<input name="btn-login" type="submit" class="btn btn-primary btn-block btn-lg" id="btn-login" value="دخول">
		</div> <!-- / .form-actions -->
	</form>
    <?  } ?>
	<!-- / Form -->


<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="assets/javascripts/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- LanderApp's javascripts -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/landerapp.min.js"></script>

<script type="text/javascript">
	window.LanderApp.start([
		function () {
			$("#signin-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
			
			// Validate username
			$("#username_id").rules("add", {
				required: true,
				minlength: 3
			});

			// Validate password
			$("#password_id").rules("add", {
				required: true,
				minlength: 6
			});
		}
	]);
</script>

</body>

</html>
