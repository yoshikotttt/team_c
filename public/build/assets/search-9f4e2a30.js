import{a}from"./api-e3a19753.js";import"./axios-4a70c6fc.js";document.getElementById("searchForm").addEventListener("submit",function(d){d.preventDefault();const n=document.getElementById("keyword").value;a("users").then(o=>{let t="",i=!1;o.forEach(e=>{e.original_id===n&&(t+=`<div id=${e.id} class="card w-96 bg-rose-200 text-primary-content mb-1 text-indigo-900">`,t+='<div class="card-body">',t+=`<p class="text-indigo-900">${e.name}さん</p>`,t+='<div class="card-actions justify-end">',t+=`<button onclick="location.href='detail?id=${e.id}'" class="btn text-indigo-900">詳細を見る</button>`,t+="</div>",t+="</div>",t+="</div>",i=!0)}),i||(t='<p class="text-indigo-900">該当するユーザーは見つかりませんでした。</p>'),document.querySelector("#output").innerHTML=t})});document.getElementById("searchForm2").addEventListener("submit",function(d){d.preventDefault();const n=document.getElementById("keyword2").value;a("users").then(o=>{let t="",i=!1;o.forEach(e=>{e.personality_id===n&&(t+=`<div id=${e.id} class="card w-96 bg-rose-200 text-primary-content mb-1 text-indigo-900">`,t+='<div class="card-body">',t+=`<p class="text-indigo-900">${e.name}さん</p>`,t+='<div class="card-actions justify-end">',t+=`<button onclick="location.href='detail?id=${e.id}'" class="btn text-indigo-900">詳細を見る</button>`,t+="</div>",t+="</div>",t+="</div>",i=!0)}),i||(t='<p class="text-indigo-900">該当するユーザーは見つかりませんでした。</p>'),document.querySelector("#output").innerHTML=t})});
