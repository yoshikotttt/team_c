import{g as c,a as l}from"./api-dca88837.js";import"./axios-4a70c6fc.js";const d=new URLSearchParams(window.location.search),s=d.get("id"),i=parseInt(s.split("?")[0]);let u="";u+=`<button onclick="location.href='detail?id=${i}'" type="button" class="btn bg-blue-200">
    戻る
</button>`;document.querySelector("#backbtn").innerHTML=u;c("users",i).then(e=>{let o="";o+=`${e.name}さん`,document.querySelector("#name").innerHTML=o;let t="";t+=`<h2>${e.name}さんはどんな人？</h2>`,document.querySelector("#name1").innerHTML=t,e.personality_id,l("personalities").then(n=>{let a="";n.forEach(r=>{e.personality_id==r.id&&(a+=`${r.name}`),document.querySelector("#type").innerHTML=a})})});l("sentences").then(e=>{c("users",i).then(o=>{let t="";e.forEach(n=>{o.personality_id==n.personalities_id&&(t+="<div>",t+=`<div id="${n.id}" class="flex items-center pb-3">`,t+=`<p>${n.content}</p>`,t+=`<button onclick="location.href='edit?id=${o.id}?${n.id}'" type="button" class="btn bg-blue-200 text-indigo-900">編集</button>`,t+="</div >",t+="</div>")}),document.querySelector("#output").innerHTML=t})});