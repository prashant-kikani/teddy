<script type="text/javascript">

      $(document).on('click', 'div', function () {
        if(oc >= 9){
            //result
        }
        document.write("hiiiiiiiiiiiiiiii");
        if(oc % 2 == 0) {
        var id = this.id;
        //document.write("id = ",id);
        //document.getElementById(id).style.display = 'block';
        if(id == 'box1') {
          if(oc % 2 == 0 && occ[0] == 0){
            document.getElementById('c1').style.display = 'block';
            oc = oc + 1;
          } else if(occ[0] == 0) {
            document.getElementById('r1').style.display = 'block';
            oc = oc + 1;
          } 
          occ[0] = 1;
        } else if(id == 'box2'){
          if(oc % 2 == 0 && occ[1] == 0){
            document.getElementById('c2').style.display = 'block';
            oc = oc + 1;
          } else if(occ[1] == 0) {
            document.getElementById('r2').style.display = 'block';
            oc = oc + 1;
          }
          occ[1] = 1;
        } else if(id == 'box3'){
          if(oc % 2 == 0 && occ[2] == 0){
            document.getElementById('c3').style.display = 'block';
            oc = oc + 1;
          } else if(occ[2] == 0) {
            document.getElementById('r3').style.display = 'block';
            oc = oc + 1;
          }
          occ[2] = 1;
          //oc = oc + 1;
        } else if(id == 'box4'){
          if(oc % 2 == 0 && occ[3] == 0){
            document.getElementById('c4').style.display = 'block';
            oc = oc + 1;
          } else if(occ[3] == 0) {
            document.getElementById('r4').style.display = 'block';
            oc = oc + 1;
          }
          occ[3] = 1;
          //oc = oc + 1;
        } else if(id == 'box5'){
          if(oc % 2 == 0 && occ[4] == 0){
            document.getElementById('c5').style.display = 'block';
            oc = oc + 1;
          } else if(occ[4] == 0) {
            document.getElementById('r5').style.display = 'block';
            oc = oc + 1;
          }
          occ[4] = 1;
          //oc = oc + 1;
        } else if(id == 'box6'){
          if(oc % 2 == 0  && occ[5] == 0){
            document.getElementById('c6').style.display = 'block';
            oc = oc + 1;
          } else if(occ[5] == 0) {
            document.getElementById('r6').style.display = 'block';
            oc = oc + 1;
          }
          occ[5] = 1;
          //oc = oc + 1;
        } else if(id == 'box7'){
          if(oc % 2 == 0 && occ[6] == 0){
            document.getElementById('c7').style.display = 'block';
            oc = oc + 1;
          } else if(occ[6] == 0) {
            document.getElementById('r7').style.display = 'block';
            oc = oc + 1;
          }
          occ[6] = 1;
          //oc = oc + 1;
        } else if(id == 'box8'){
          if(oc % 2 == 0  && occ[7] == 0){
            document.getElementById('c8').style.display = 'block';
            oc = oc + 1;
          } else if(occ[7] == 0) {
            document.getElementById('r8').style.display = 'block';
            oc = oc + 1;
          }
          occ[7] = 1;
          //oc = oc + 1;
        } else if(id == 'box9'){
          if(oc % 2 == 0  && occ[8] == 0){
            document.getElementById('c9').style.display = 'block';
            oc = oc + 1;
          } else if(occ[8] == 0) {
            document.getElementById('r9').style.display = 'block';
            oc = oc + 1;
          }
          occ[8] = 1;
          //oc = oc + 1;
        }
        }  //  
      });
      //document.write("id = ",id);
      

      /*document.getElementById(var).onclick = function(e) {
        if(oc % 2 == 0){
          $('#box').prepand('<img src="images/cross.png">');
        } else {
          $('#box').prepand('<img src="images/round.png">'); 
        }
        oc = oc + 1;
      }*/
    </script>