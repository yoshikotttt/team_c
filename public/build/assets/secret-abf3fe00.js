import{g as r}from"./api-e3a19753.js";import"./axios-4a70c6fc.js";const a=new URLSearchParams(window.location.search),n=a.get("id");let c="";c+=`<button onclick="location.href='detail?id=${n}'" type="button" class= "btn btn-secondary m-5 bg-blue-200 text-xl text-indigo-900">
    戻る
</button>`;document.querySelector("#backbtn").innerHTML=c;r("users",n).then(e=>{let t="";t+=`${e.name}さんの誕生日は？`,document.querySelector("#question").innerHTML=t});document.getElementById("userForm").addEventListener("submit",function(e){e.preventDefault();let t=document.getElementById("content").value;r("users",n).then(o=>{const d=o.birthday,i=o.id;t==d?window.location.href=`detail_edit?id=${i}`:(alert("誕生日がちがうよ。"),window.location.href=`detail?id=${i}`)})});
