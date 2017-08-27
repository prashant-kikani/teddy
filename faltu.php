else {
            var pp = Math.floor(Math.random() * 9 + 1);     //btw 1 to 9 both inclusive.
            while(occ[pp - 1] == 1) {
                pp = Math.floor(Math.random() * 9 + 1);
            }
            if(pp == 1) {
                if(oc % 2 == 1 && occ[0] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[0] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[0] = 1;
            } else if(pp == 2) {
                if(oc % 2 == 1 && occ[1] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[1] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[1] = 1;
            } else if(pp == 3) {
                if(oc % 2 == 1 && occ[2] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[2] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[2] = 1;
            } else if(pp == 4) {
                if(oc % 2 == 1 && occ[3] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[3] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[3] = 1;
            } else if(pp == 5) {
                if(oc % 2 == 1 && occ[4] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[4] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[4] = 1;
            } else if(pp == 6) {
                if(oc % 2 == 1 && occ[5] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[5] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[5] = 1;
            } else if(pp == 7) {
                if(oc % 2 == 1 && occ[6] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[6] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[6] = 1;
            } else if(pp == 8) {
                if(oc % 2 == 1 && occ[7] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[7] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[7] = 1;
            } else if(pp == 9) {
                if(oc % 2 == 1 && occ[8] == 0) {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } else if(occ[8] == 0) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[8] = 1;
            }
        }












        //**************************************************************************************************************************************************


        else {
            if(oc >= 9){
               //result
            }
            var pp = Math.floor(Math.random() * 9 + 1);     //btw 1 to 9 both inclusive.
            while(occ[pp - 1] == 1) {
                pp = Math.floor(Math.random() * 9 + 1);
            }
            if(pp == 1) {
                if(oc % 2 == 1) {
                    document.getElementById('r1').style.display = 'block';
                    oc = oc + 1;
                } else  {
                    document.getElementById('c1').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[0] = 1;
            } else if(pp == 2) {
                if(oc % 2 == 1) {
                    document.getElementById('r2').style.display = 'block';
                    oc = oc + 1;
                } else  {
                    document.getElementById('c2').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[1] = 1;
            } else if(pp == 3) {
                if(oc % 2 == 1) {
                    document.getElementById('r3').style.display = 'block';
                    oc = oc + 1;
                } else {
                    document.getElementById('c3').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[2] = 1;
            } else if(pp == 4) {
                if(oc % 2 == 1) {
                    document.getElementById('r4').style.display = 'block';
                    oc = oc + 1;
                } else  {
                    document.getElementById('c4').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[3] = 1;
            } else if(pp == 5) {
                if(oc % 2 == 1) {
                    document.getElementById('r5').style.display = 'block';
                    oc = oc + 1;
                } else {
                    document.getElementById('c5').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[4] = 1;
            } else if(pp == 6) {
                if(oc % 2 == 1) {
                    document.getElementById('r6').style.display = 'block';
                    oc = oc + 1;
                } else {
                    document.getElementById('c6').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[5] = 1;
            } else if(pp == 7) {
                if(oc % 2 == 1) {
                    document.getElementById('r7').style.display = 'block';
                    oc = oc + 1;
                } else {
                    document.getElementById('c7').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[6] = 1;
            } else if(pp == 8) {
                if(oc % 2 == 1 ) {
                    document.getElementById('r8').style.display = 'block';
                    oc = oc + 1;
                } else {
                    document.getElementById('c8').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[7] = 1;
            } else if(pp == 9) {
                if(oc % 2 == 1) {
                    document.getElementById('r9').style.display = 'block';
                    oc = oc + 1;
                } else {
                    document.getElementById('c9').style.display = 'block';
                    oc = oc + 1;
                } 
                occ[8] = 1;
            }
        }


        ////////////////////////////////////////////////////////////////////////////////////////////////////////////


        var xxx = "<?php
                        $uname = $_SESSION['name']; 
                        $p = $db->query('select ticp from users where name=$uname');
                        $p = $p + 1;
                        $phi = $db->query('select tichi from users where name=$uname');
                        $phi = $phi + 1;
                        $q = $db->query('update users set ticp=$p where name=$uname');
                        $q1 = $db->query('update users set tichi=$phi where name=$uname');
                        ?>";