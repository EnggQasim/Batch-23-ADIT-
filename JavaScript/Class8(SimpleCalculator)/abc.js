//Global Variables
m, opt;


function insNum(num){   
    //num is local variable
    document.getElementById("txt").value += num;   
}


// For +,-,*,/,%....
function operation(op){
    m = Number(document.getElementById("txt").value);
    opt = op;
    document.getElementById("txt").value="";
}

// For Compute Result or equal
function eq(){
    if(opt=="+"){
        document.getElementById("txt").value =   m + Number(document.getElementById("txt").value)
    }else if(opt=="-"){

    }else if(opt=="*"){

    }else if(opt=="/"){

    }
}