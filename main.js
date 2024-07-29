let governorates =["Erbil","Nineveh","Anbar","Baghdad","Kirkuk","Salah Al-Din","Dohok","Diyala","Basrah","Sulaymanya","Thi-Qar","Qadisiyah","Karbala","Babil","Missan","Najaf","Wassit"];
let governorateName=document.querySelector(".row");
// console.log(governorateName);

for(let i=0;i< governorates.length;i++){
    let div=document.createElement("div");
    div.className="col-sm-6 col-md-3 col-lg-3";

    let a=document.createElement("a");
    a.href="#";
    a.innerHTML=`${governorates[i]}`;
    a.className="gov";
    // let span =document.createElement("span");
    // a.appendChild(span);

    div.appendChild(a);
    governorateName.appendChild(div);

}
let govs=document.getElementsByClassName("gov");
console.log(govs[0].innerHTML);