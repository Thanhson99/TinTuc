<?php echo isset($this->meta) ? $this->meta : "" ?>

<link href="<?php echo DIR_TEMPLATE ?>default/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo DIR_TEMPLATE ?>default/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo DIR_TEMPLATE ?>default/js/jquery.min.js"></script>
<script src="<?php echo DIR_TEMPLATE ?>default/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>