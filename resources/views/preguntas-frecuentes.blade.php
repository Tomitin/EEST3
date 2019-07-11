@extends('layout')

@section('title', 'Preguntas frecuentes')

@section('extra-css')
    <link rel="stylesheet" href="css/pages/faq.css">
@endsection


@section('content')
<section class="nav-separator">
      <div class="container">
	 <div class="row">
	  <div class="col-xl-8 col-sm-12">
        <h3>Aquí debajo usted encontrará las preguntas más frecuentes sobre nuestro instituto.</h3>
        <div class="faq-qa">
          <a href="javascript:void();" id="expandAccordion">Expandir todo</a><a style="margin-left: 13px" href="javascript:void();" id="collapseAccordion">Agrupar todo</a>
  
          <button class="collapsible" style="outline:none;"><i class="fa fa-caret-right fa-lg rotate"></i><b>¿A partir de qué fecha puedo inscribir a mi hijo y dónde? </b></button>
          <div class="content">
            <p>- Las inscripciones estarán disponibles a partir del 6 de septiembre hasta el 9 de enero. La inscripción se realizará en cooperadora 1er piso.</p>
          </div>
  
          <button class="collapsible" style="outline:none;"><i class="fa fa-caret-right fa-lg rotate"></i><b>¿A partir de qué fecha puedo inscribir a mi hijo y dónde? </b></button>
          <div class="content">
            <p>- Las inscripciones estarán disponibles a partir del 6 de septiembre hasta el 9 de enero. La inscripción se realizará en cooperadora 1er piso.</p>
          </div>
  
          <button class="collapsible" style="outline:none;"><i class="fa fa-caret-right fa-lg rotate"></i><b>¿A partir de qué fecha puedo inscribir a mi hijo y dónde? </b></button>
          <div class="content">
            <p>- Las inscripciones estarán disponibles a partir del 6 de septiembre hasta el 9 de enero. La inscripción se realizará en cooperadora 1er piso.</p>
          </div>
  
          <button class="collapsible" style="outline:none;"><i class="fa fa-caret-right fa-lg rotate"></i><b>¿A partir de qué fecha puedo inscribir a mi hijo y dónde? </b></button>
          <div class="content">
            <p>- Las inscripciones estarán disponibles a partir del 6 de septiembre hasta el 9 de enero. La inscripción se realizará en cooperadora 1er piso.</p>
          </div>
          
        </div>
    </div>
	  <div class="col-xl-4 col-sm-12 text-center">
      <h4>¿Encontraste lo que buscabas?</h4>
      <button type="button" class="btn btn-outline-success page-useful"><i class="fa fa-thumbs-up fa-3x"></i></button>
      <button class="btn btn-outline-danger page-useful"><i class="fa fa-times fa-3x"></i></button>
      <span id="print-thankyou"></span>
    </div>
    
	 </div>
  </div>
  </section>

@endsection

@section('extra-js')
  <script src="js/FAQ.js"></script>

  <script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for(i = 0; i < coll.length; i++){
    coll[i].addEventListener("click",
    function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if(content.style.maxHeight){
        content.style.maxHeight = null;
      }else{
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  }
  </script>
      
@endsection


</body>
</html>
