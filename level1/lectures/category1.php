
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Goldhawk College</title> 

<script type="text/javascript" src="/lectures/js/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
//Author; Alexander Adu-Sarkodie
//Biopic; http://www.goldhawk-college.com/istudio/index-i.html
//Features of this script ensures the the application degrades gracefully
//Comments have been provided to explain what is being achieved.

$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 560;
  var slides = $('.slide');
  var numberOfSlides = slides.length;
 
  // Remove scrollbar in JS
  $('#slidesContainer').css('overflow', 'hidden');
 
  // Wrap all .slides with #slideInner div. This is container for just slide boxes
  slides
    .wrapAll('<div id="slideInner"></div>')
    // Float left to display horizontally, readjust .slides width
	.css({
      'float' : 'left',
      'width' : slideWidth
    });
 
  // Set #slideInner width equal to total width of all slides. The 2 properties
  $('#slideInner').css('width', slideWidth * numberOfSlides);
 
  // Insert controls in the DOM.Prepend for left navigation and append for right control
  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Clicking moves left</span>')
    .append('<span class="control" id="rightControl">Clicking moves right</span>');
 
  // Hide left arrow control on first load
  manageControls(currentPosition);
 
  // Create event listeners for .controls clicks. Note the continuous use of css classes Here we use the tertiary operator
  $('.control')
    .bind('click', function(){
    // Determine new position
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
	// Hide / show controls. Here currentPosition is used as argument for manageControls
    manageControls(currentPosition);
    // Move slideInner using margin-left
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });
 
  // manageControls: Hides and Shows controls depending on currentPosition. At both extreme positions the arrows are hidden using tertiary operators
  function manageControls(position){
    // Hide left arrow if position is first slide
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
	// Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
  }	
});



</script> 


<style>

	#joinDiscussion {
		margin-top:30px;
	}
	
	h1 {
	
		background:none;
		font-size:2.8em;
		color: #80cc80;
		margin-bottom:0;
		
	}
		
	#slideshow {
		margin:0 auto;
		width:640px;
		height:263px;
		position:relative;
	}
	
	
	#slideshow p {
		padding-right:10px;
	}
	
	#slideshow #slidesContainer {
	  margin:0 auto;
	  width:560px;
	  height:273px;
	  overflow:auto; /* allow scrollbar */
	  position:relative;
	}
	
	#slideshow #slidesContainer .slide {
	  margin:0 auto;
	  width:540px; /* reduce by 20 pixels of #slidesContainer to avoid horizontal scroll */
	  height:273px;
	  background-color:#201E1F;
	}
	 
	/** 
	 * Slideshow controls style rules.
	 */
	.control {
	  display:block;
	  width:39px;
	  height:263px;
	  text-indent:-10000px;
	  position:absolute;
	  cursor: pointer;
	}
	#leftControl {
	  top:45px;
	  left:0;
	  background:transparent url(/flickr/images/control_left.jpg) no-repeat 0 0;
	  height:228px;
	}
	
	#rightControl {
	  top:45px;
	  right:0;
	  background:transparent url(/flickr/images/control_right.jpg) no-repeat 0 0;
	  height:228px;
	}
	
	#slideshow img {
		padding:10px;
		float:left;
	}
	
	#slideshow p {
		color:#fff;
	}
	 

</style>

</head> 
<body> 
 
   	<!-- Begin  Slide --> 
  <div id="slideshow"> 
		    <div id="slidesContainer">
			 <h1></h1>
		      <div class="slide"> 
		       <a href="index.html"><img src="/flickr/images/1.jpg" alt="Welcome  to Goldhawk College" width="215" height="260"  /></a>
				<p>We <a class="contact-register" href="register.html">enrol</a> all the year round and intend to use high level means of electronic communication to be part of delivery of our  tuition. Combining effective traditional classroom teaching with Read Write Web technologies. </p> 
			    </div> 
			    <div class="slide"> 
				     <img src="/flickr/images/2.jpg"  width="215" height="260" alt="Business Studies" /> 
				      <p>This course provides a solid grounding in  business concepts, practices and methodologies, and offers students the opportunity to follow a broad business pathway or focus on a specialist area such as Marketing, Human Resources or Finance.</p>
						<p>As you progress through the degree, you will have the opportunity to specialise within  other functional areas.</p>		
		      </div> 
               <div class="slide"> 
				  <img src="/flickr/images/3.jpg"  width="215" height="260" alt="Computer Science" />
			       <p>The next generation of industrial-strength software applications will need the ability to make effective intelligent decisions. Much that is central to computer science has been motivated by the development of artificial intelligence. </p>				
					<p>The course also focuses on the use of biologically inspired machine and  learning algorithms</p>	
		      </div>		
			    <div class="slide">      
		        <img src="/flickr/images/4.jpg"  width="215" height="260" alt="Enterprise   Based Professional Courses" />
				<p>By using high-end equipment and tools in our modern Cisco, and mobile communication laboratories you will gain hands-on skills needed by Industry the world over. 
                </p>		
		      </div>
               <div class="slide"> 
		        <img src="/flickr/images/5.jpg"  width="215" height="260" alt="Oil Rigging" /> 
		      	<p>The Petroleum Engineering course starts students from post A-level science, through the basics of petroleum engineering and petroleum process science, to core topics such as crude oil reservoir, drilling and production engineering, and petroleum geology.
				</p>
				<p> The course also promotes R &amp; D quality work through nurturing and innovativation.</p>		
		      </div>
		    </div> 
		  </div>	
</body>
</html>