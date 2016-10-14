(function(){
  document.querySelector('#wp-admin-bar-wpis li > a').addEventListener('click', function(e){
    e.preventDefault();
    var instance = e.target.getAttribute('href').substr(1);
    if (instance === 'exit') {
      document.cookie = "wpp_shadow=;path=/";
    } else {
      document.cookie = "wpp_shadow=" + instance + ";path=/";
    }
    location.reload()
  });
})();
