

function delet(){
    document.getElementById("right").value="";
    document.getElementById("forward").value="";
    document.getElementById("left").value="";
}

var goForward=0;
var turn=150;
var count=1;
function start(){

    var right =document.getElementById("right").value;
    var left =document.getElementById("left").value;
    var forward =document.getElementById("forward").value;

    if(right != ''){
        document.getElementById("direction1").innerHTML="R";
        document.getElementById("distance1").innerHTML=right;
        count++;
        right*=2;
        right = turn-right;
        var V = document.getElementById("drowCont");
        var ctx = V.getContext("2d");
        ctx.beginPath();
        ctx.moveTo(turn,goForward);
        ctx.lineTo(right,goForward);
        ctx.stroke();
        turn = right;
    }

    if(forward != ''){
        document.getElementById("direction"+count).innerHTML="F";
        document.getElementById("distance"+count).innerHTML=forward;
        count++;
        forward *=2;
        var c = document.getElementById("drowCont");
        var ctx = c.getContext("2d");
        ctx.beginPath();
        ctx.moveTo(turn,goForward);
        ctx.lineTo(turn,forward);//SEC PRAMETER IS LIKE MARGIN TOP
        ctx.stroke();
        goForward +=forward;
    }

    if(left != ''){
        document.getElementById("direction"+count).innerHTML="L";
        document.getElementById("distance"+count).innerHTML=left;
        count++;
        left*=2;
        left = turn+left;
        var V = document.getElementById("drowCont");
        var ctx = V.getContext("2d");
        ctx.beginPath();
        ctx.moveTo(turn,goForward);
        ctx.lineTo(left,goForward);//SEC PRAMETER IS LIKE MARGIN TOP
        ctx.stroke();
        turn = left;
    }

}

function save(){
    
    $(document).ready(function(){
        $("form").submit(function(event){
            var right=document.getElementById("right").value;
            var forward=document.getElementById("forward").value;
            var left= dcoument.getElementById("left").value;
            $.post("insert.php",{right:right,forward:forward,left:left},function(data){
                console.log(data);
            })

        })
    })
        
}
