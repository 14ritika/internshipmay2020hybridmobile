
$(document).ready(function(){
    $("#fac").click(function(){
      var n=parseInt($("#num").val());
      var f=1;
      for(i=1;i<=n;i++){
          f=f*i;
      }
      $("#result").val(f);
    });
});
