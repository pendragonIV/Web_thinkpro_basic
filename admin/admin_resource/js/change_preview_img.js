    function loadFile(event) {
        let output = document.getElementById('img_preview');
        output.src = URL.createObjectURL(event.target.files[0]);
        console.log(output.src);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
          }
    
  };