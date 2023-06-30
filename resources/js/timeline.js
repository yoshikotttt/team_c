import { getAll } from "./api.js";

getAll("users").then((users) => {
    let output = "";
    users.forEach((user) => {
        output += `<div>`;
        output += `<h2>${user.name}</h2>`;
        output += `<p>${user.personality_id}</p>`;
        output += `<button onclick="location.href='detail'" type="button" class="btn btn-primary">詳細を見る</button>`;
        output += `</div>`;
    });
    document.querySelector("#output").innerHTML = output;
});

// output += `<a href="detail?id=${user.id}">`;
