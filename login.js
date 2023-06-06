
var form = document.querySelector('.form');
var inputs = form.querySelectorAll('input');

function handleEvent(e) {
  var target = e.target;
  var $this = target;
  var label = target.previousElementSibling;

  if (e.type === 'keyup') {
    if ($this.value === '') {
      label.classList.remove('active', 'highlight');
    } else {
      label.classList.add('active', 'highlight');
    }
  }

   else if (e.type === 'blur') {
    if ($this.value === '') {
      label.classList.remove('active', 'highlight');
    } else {
      label.classList.remove('highlight');
    }
  } 
  
  else if (e.type === 'focus') {
    if ($this.value === '') {
      label.classList.remove('highlight');
    } else {
      label.classList.add('highlight');
    }
  }
}

for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('keyup', handleEvent);
  inputs[i].addEventListener('blur', handleEvent);
  inputs[i].addEventListener('focus', handleEvent);
}





var tabLinks = document.querySelectorAll('.tab a');

for (var i = 0; i < tabLinks.length; i++) {
  tabLinks[i].addEventListener('click', function (e) {
   
    e.preventDefault();

    var parent = this.parentNode;
    parent.classList.add('active');

    var siblings = parent.parentNode.children;
    for (var j = 0; j < siblings.length; j++) {
      if (siblings[j] !== parent) {
        siblings[j].classList.remove('active');
      }
    }

    var target = this.getAttribute('href');

    var tabContents = document.querySelectorAll('.tab-content > div');
    for (var k = 0; k < tabContents.length; k++) {
      if (tabContents[k].id !== target) {
        tabContents[k].style.display = 'none';
      }
    }

    document.querySelector(target).style.display = 'block';
  });
}




/* 
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
              if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight'); 
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
              label.removeClass('highlight'); 
              } 
        else if( $this.val() !== '' ) {
              label.addClass('highlight');
              }
      }
  
  });  */


  /* separation separation separation separation separation separation separation separation separation */
  
/*   $('.tab a').on('click', function (e) {
    
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
  }); */