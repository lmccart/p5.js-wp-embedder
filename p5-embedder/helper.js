window.onload = function() {
  examples.init();
}
var examples = {
  init: function(file) {
    
    var exampleCode = $('#editor').text();

    try {       

      if (exampleCode.indexOf('new p5()') === -1) {
        exampleCode += '\nnew p5();';
      }


      var userScript = $('#exampleFrame')[0].contentWindow.document.createElement('script');
      userScript.type = 'text/javascript';
      userScript.text = exampleCode;
      userScript.async = false;
      $('#exampleFrame')[0].contentWindow.document.body.appendChild(userScript);

    } catch (e) {
      console.log(e);
    }
  }

}