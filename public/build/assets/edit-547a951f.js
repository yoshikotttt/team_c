import{g as m,a as p,c as _}from"./api-e3a19753.js";import"./axios-4a70c6fc.js";const y=new URLSearchParams(window.location.search),l=y.get("id"),d=parseInt(l.split("?")[0]),i=parseInt(l.split("?")[1]);let c="";c+=`<button onclick="location.href='detail_edit?id=${d}?'" type="button" class="btn bg-blue-200">
    戻る
</button>`;document.querySelector("#backbtn").innerHTML=c;let s="";s+=`<input id="user_id" type="hidden" name="user_id" value=${d} />`;document.querySelector("#userId").innerHTML=s;let a="";a+=`<input id="sentence_id" type="hidden" name="sentence_id" value=${i} />`;document.querySelector("#sentenceId").innerHTML=a;m("users",d).then(t=>{let e="";e+=`${t.name}さん`,document.querySelector("#username").innerHTML=e});p("sentences").then(t=>{let e="";t.forEach(n=>{i==n.id&&(e+=`<p>${n.content}</p>`)}),document.querySelector("#select").innerHTML=e});document.getElementById("editForm").addEventListener("submit",function(t){t.preventDefault();let e=parseInt(document.getElementById("user_id").value,10),n=parseInt(document.getElementById("sentence_id").value,10),u=parseInt(document.getElementById("edit_user_id").value,10),r=document.getElementById("content").value;if(!e||!n||!u||!r){alert("Please fill in all required fields.");return}_("edit",{user_id:e,sentence_id:n,edit_user_id:u,content:r}).then(o=>{console.log("Success:",o),alert("edit created successfully"),window.location.href=`detail_edit?id=${d}?${i}`})});
