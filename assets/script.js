(function(){
  var links = document.querySelectorAll('#wp-admin-bar-wpis li > a');
  for(var i = 0; i < links.length; i++){
    var element = links[i];
    var listener = function(e){
      e.preventDefault();
      var instance = e.target.getAttribute('href').substr(1);
      if (instance === 'exit') {
        document.cookie = "wpp_shadow=;path=/";
      } else {
        document.cookie = "wpp_shadow=" + instance + ";path=/";
      }
      location.reload();
    };
    
    element.addEventListener('click', listener);
  }
})();
