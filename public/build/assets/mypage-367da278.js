import{a as o}from"./api-119d561d.js";import"./axios-4a70c6fc.js";const r=document.getElementById("type"),s=r.dataset.personalityId;o("personalities").then(d=>{let e="";d.forEach(n=>{s==n.id&&(e+="<div>",e+=`<h2>${n.name}</h2>`,e+="</div >"),document.querySelector("#personality").innerHTML=e}),o("sentences").then(n=>{let t="";n.forEach(i=>{s==i.personalities_id&&(t+="<div>",t+=`<div id="${i.id}" class="pb-2">`,t+=`<p>${i.content}</p>`,t+="</div >",t+="</div>")}),document.querySelector("#output").innerHTML=t})});const u=document.getElementById("use_id"),c=u.dataset.userId;o("editSentences").then(d=>{let e="",n=!1;d.forEach(t=>{c==t.user_id&&(e+="<div>",e+=`<div id="${t.id}" class="pb-2">`,e+=`<p>${t.content}</p>`,e+="</div >",e+="</div>",n=!0)}),n||(e+="<p>まだ編集コメントはありません</p>"),document.querySelector("#output2").innerHTML=e});
