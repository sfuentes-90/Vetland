	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center">
    				<h2 class="sec-title">Nueva <span>Consulta</span></h2>
                    <div class="line-btm c-white"></div>
    			</div>
    		</div> <!-- heading row end -->

			<div class="row">
				<div class="col-md-12">
					<form class="contact-inner" action="<?=site_url("nueva_consulta/buscar")?>" method="POST">
						<div class="row">
							<div class="col-md-4"><div class="form-group"><label >Rut Dueño</label><input type="text" class="form-control" name="rut" placeholder="Rut Dueño"></div></div>
							<div class="col-md-4"><div class="form-group"><label >ID Paciente</label><input type="text" class="form-control" name="id" placeholder="ID Paciente"></div></div>
							<div class="col-md-4 text-center"><button class="btn btn-default">Nueva Consulta</button></div>
						</div>
					</form>
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</section>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url("assets/js/bootstrap.min.js")?>"></script>
	<script>
	function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
	
	</script>
    <script type="text/javascript" src="<?=base_url("js/jquery.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/bootstrap.min.js")?>"></script>
  </body>
</html>