player = 1;
document.getElementById("pdis").innerHTML = player;

function win1(){
    if(//logic 1
        (document.getElementById("b1").value == "X") &&
        (document.getElementById("b2").value == "X") && 
        (document.getElementById("b3").value == "X")){
            alert("Palyer one has won!")
        }
    if(//logic 2
        (document.getElementById("b4").value == "X") &&
        (document.getElementById("b5").value == "X") && 
        (document.getElementById("b6").value == "X")){
            alert("Palyer one has won!")
    }
    if(//logic 3
        (document.getElementById("b7").value == "X") &&
        (document.getElementById("b8").value == "X") && 
        (document.getElementById("b9").value == "X")){
            alert("Palyer one has won!")
    }

    if(//logic 4
        (document.getElementById("b1").value == "X") &&
        (document.getElementById("b4").value == "X") && 
        (document.getElementById("b7").value == "X")){
            alert("Palyer one has won!")
    }

    if(//logic 5
        (document.getElementById("b2").value == "X") &&
        (document.getElementById("b5").value == "X") && 
        (document.getElementById("b8").value == "X")){
            alert("Palyer one has won!")
    }

    if(//logic 6
        (document.getElementById("b3").value == "X") &&
        (document.getElementById("b6").value == "X") && 
        (document.getElementById("b9").value == "X")){
             alert("Palyer one has won!")
    }

    if(//logic 7
        (document.getElementById("b1").value == "X") &&
        (document.getElementById("b5").value == "X") && 
        (document.getElementById("b9").value == "X")){
            alert("Palyer one has won!")
    }
    if(//logic 8
       (document.getElementById("b3").value == "X") &&
       (document.getElementById("b5").value == "X") && 
       (document.getElementById("b7").value == "X")){
            alert("Palyer one has won!")
    }

        
}



//For Player 2
function win2(){
    if(//logic 1
        (document.getElementById("b1").value == "0") &&
        (document.getElementById("b2").value == "0") && 
        (document.getElementById("b3").value == "0")){
            alert("Palyer Two has won!")
        }
    if(//logic 2
        (document.getElementById("b4").value == "0") &&
        (document.getElementById("b5").value == "0") && 
        (document.getElementById("b6").value == "0")){
            alert("Palyer Two has won!")
    }
    if(//logic 3
        (document.getElementById("b7").value == "0") &&
        (document.getElementById("b8").value == "0") && 
        (document.getElementById("b9").value == "0")){
            alert("Palyer Two has won!")
    }

    if(//logic 4
        (document.getElementById("b1").value == "0") &&
        (document.getElementById("b4").value == "0") && 
        (document.getElementById("b7").value == "0")){
            alert("Palyer Two has won!")
    }

    if(//logic 5
        (document.getElementById("b2").value == "0") &&
        (document.getElementById("b5").value == "0") && 
        (document.getElementById("b8").value == "0")){
            alert("Palyer Two has won!")
    }

    if(//logic 6
        (document.getElementById("b3").value == "0") &&
        (document.getElementById("b6").value == "0") && 
        (document.getElementById("b9").value == "0")){
             alert("Palyer Two has won!")
    }

    if(//logic 7
        (document.getElementById("b1").value == "0") &&
        (document.getElementById("b5").value == "0") && 
        (document.getElementById("b9").value == "0")){
            alert("Palyer Two has won!")
    }
    if(//logic 8
       (document.getElementById("b3").value == "0") &&
       (document.getElementById("b5").value == "0") && 
       (document.getElementById("b7").value == "0")){
            alert("Palyer Two has won!")
    }

        
}


function turn(id){
    if(document.getElementById(id).value == ""){//check button value is blank
        if(player==1){//IF Player 1
            document.getElementById(id).value = "X" ;// Change ButtonValue
            player = 2;//Change Player
            document.getElementById("pdis").innerHTML = player;//Show Player Value in pdis id
        }else if( player == 2){//IF Player 2
            document.getElementById(id).value = "0";
            player = 1;
            document.getElementById("pdis").innerHTML = player;
        }
    }//end check button value is blank

    win1();
    win2();
}

