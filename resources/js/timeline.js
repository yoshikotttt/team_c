import { getAll } from "./api.js";
console.log("a");

getAll("users").then((users) => {
    let output = "";
    users.forEach((user) => {
        output += `<div>`;
        output += `<h2>${user.name}</h2>`;
        output += `<p>${user.personality_id}</p>`;
        // 中間テーブル personality_user
        output += `</div>`;
    });
    document.querySelector("#output").innerHTML = output;
});
