  var slideout = new Slideout({
        'panel': document.getElementById('main'),
        'menu': document.getElementById('menu'),
	  	'duration': 400,
        'padding': 256,
        'tolerance': 70,
	  	'easing': 'cubic-bezier(.52,2,.55,.27)'

      });

	
	//opacidad main
	function close(eve) {
	  eve.preventDefault();
	  slideout.close();
		
	}

	slideout
	  .on('beforeopen', function() {
		this.panel.classList.add('panel-open');
	  })
	  .on('open', function() {
		this.panel.addEventListener('click', close);
	  })
	  .on('beforeclose', function() {
		this.panel.classList.remove('panel-open');
		this.panel.removeEventListener('click', close);
	  });


      // Toggle button

	 document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
			slideout.toggle();
			  slideout.enableTouch();
		  });

