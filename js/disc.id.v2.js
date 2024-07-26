var aset='../assets/';$('a.color').click(function(){
    var color=$(this).attr('data-value');
    document.getElementById('disc_css').href=aset+'/css/w3-theme-'+color+'.css';
    $.post(aset+'/js/change.color.php',{'color':color});
  });
  
  jQuery(document).ready(function($) {
  $('a.color_graph').click(function(){
    var color=$(this).attr('data-value');
    document.getElementById('disc_css').href=aset+'/css/w3-theme-'+color+'.css'; 
    data={
          'color':color,
          's1':$('#s1').val(),
          'i1':$('#i1').val(),
          'p1':$('#p1').val(),
          's2':$('#s2').val(),
          'i2':$('#i2').val(),
          'p2':$('#p2').val(),
          's3':$('#s3').val(),
          'i3':$('#i3').val(),
          'p3':$('#p3').val(),
          };
    $.post(aset+'/js/change.color.php',data,function(result){
      var r=Math.random()*1000;
      $('#graph1').attr('src',aset+'/img/graph.php?g=1&v='+r);
      $('#graph2').attr('src',aset+'/img/graph.php?g=2&v='+r);
      $('#graph3').attr('src',aset+'/img/graph.php?g=3&v='+r);
    });
  });
  
  $('input:radio').on('click',function(){
    var m=$(this).attr('id');
    //-- Check for 
    if($('#'+(m.slice(0,1)=='m'?'l':'m')+'_'+m.slice(2)).is(':checked')){
        $('#msg').html('You cannot select both of `most` and `least` choice in the same term');
        $('#warning').show();
        $(this).removeAttr('checked');
    }
  });
  

  
  function openTabs(evt, tabName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("tabs");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" w3-border-theme", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-border-theme";
  }

});