// Select all tabs
$('.nav-tabs a').click(function(){
    $(this).tab('show');
  })
  
  // Select tab by name
  $('.nav-tabs a[href="#about-v2"]').tab('show')
  
  // Select first tab
  $('.nav-tabs a:first').tab('show')
  
  // Select last tab
  $('.nav-tabs a:last').tab('show')
  
  // Select fourth tab (zero-based)
  $('.nav-tabs li:eq(4) a').tab('show')