const checks = {

    put: function(formName){

        this.formArray = document.getElementsByName(formName);
        this.checkArray = [];

        for(let i=0; i<this.formArray.length; i++){
            if(this.formArray[i].value == ""){
                this.checkArray[i] = false;
            }else{
                this.checkArray[i] = true;
            }
        }

        return this;
    },

    stopBtn: function(mandatoryCode){
        const mandatory = mandatoryCode.split("");

        for(let i=0; i<mandatory.length; i++){
            if(checks[mandatory[i]]){
                return this;
            }
        }
        return true;
    }
}

//下のコードは過去作ったやつだからここでは使えない

let input = [document.getElementById("text"),
             document.getElementById("bordershape"),
             document.getElementById("textcolor"),
             document.getElementById("bordercolor"),
             document.getElementById("backcolor")];

let btn = document.getElementById("btn");
let flg = false;

let checks = () =>{
    for(i=0; i<input.length; i++){
        if(input[i].value == ""){
            btn.style.backgroundColor = "rgb(85, 85, 85)";
            btn.style.color = "rgb(177, 174, 174)";
            btn.innerText = "入力されていない箇所があります";
            return false;
        }
    }
    btn.style.backgroundColor = "dodgerblue";
    btn.style.color = "white";
    btn.innerText = "デザインを表示";
}