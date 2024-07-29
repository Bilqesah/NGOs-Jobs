
// add post
let governorates =["Erbil","Nineveh","Anbar","Baghdad","Kirkuk","Salah Al-Din","Dohok","Diyala","Basrah","Sulaymanya","Thi-Qar","Qadisiyah","Karbala","Babil","Missan","Najaf","Wassit"];

let governorate_select=document.querySelector("#location");
console.log(governorate_select);
for(let i=0;i< governorates.length;i++){
    let option=document.createElement("option");
    option.innerHTML=`${governorates[i]}`;
    option.value=governorates[i];
    governorate_select.appendChild(option);

}
