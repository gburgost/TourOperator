<footer class="footer">
		<div class="left2 triangle2"></div>
  		<div class="right2 triangle2"></div>
  		<div class="contacto">
  			<h1 class="logo">
				TourOperator
			</h1>
			<p>Fono: +569 91234567</p>
			<p>Email: contacto@touroperator.cl</p>
  		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
	  WebFont.load({
	    google: {
	      families: ['Kaushan Script', 'Montserrat:400,700']
	    }
	  });
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
	<script>
		var consulta = window.matchMedia('(max-width: 650px)');
    	consulta.addListener(mediaQuery);

    	var $burguerButton = document.getElementById('burguer-button');
    	var $menu = document.getElementById('menu');
    	
    	function toggleMenu(){
    		$menu.classList.toggle('active')
    	};

    	function showMenu(){
    		$menu.classList.add('active')
    	};

    	function hideMenu(){
    		$menu.classList.remove('active')
    	};

    	function mediaQuery() {
    		if(consulta.matches) {
    			console.log('se cumplio');
    			$burguerButton.addEventListener('touchstart', toggleMenu);
	    	}
	    	else {
	    		console.log('no se cumplio');
    			$burguerButton.removeEventListener('touchstart', toggleMenu);

	    	}
    	}
    	mediaQuery();

    	var $body = document.body;

    	var gestos = new Hammer($body);
		gestos.on('swiperight', hideMenu);
		gestos.on('swipeleft', showMenu);

		var $drop = document.getElementById("dropdown");

		function toggleDestino(){
    		$drop.classList.toggle('active')
    	};
		var $destino = document.getElementById('destino');
		$destino.addEventListener('click', toggleDestino);
	</script>
	<link rel="stylesheet" href="css/estilo.min.css">
</body>
</html>