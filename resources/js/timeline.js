import { getAll, remove } from "./api.js";

getAll("users").then((users) => {
    let output = "";
    users.forEach((user) => {
        output += `<div>`;
        output += `<h2>${user.name}</h2>`;
        output += `<p>${personality_user.personality}</p>`;
        // 中間テーブル personality_user
        output += `</div>`;
    });
    document.querySelector("#output").innerHTML = output;
});
