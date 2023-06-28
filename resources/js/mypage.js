import { getAll, remove } from "./api.js";

// 中間テーブル personality_user
getAll("personality_user").then((personality_user) => {
    let output = "";
    output += `<div>`;
    output += `<h2>${personality_user.personality}</h2>`;
    output += `</div >`;
    document.querySelector("#type").innerHTML = output;
});

getAll("editSentences").then((editSentences) => {
    let output = "";
    sentences.forEach((sentence) => {
        output += `<div>`;
        output += `<div id="${sentence.id}">`;
        output += `<p>${sentence.content}</p>`;
        output += `</div >`;
        output += `</div>`;
    });
    document.querySelector("#output").innerHTML = output;
});

getAll("editSentences").then((editSentences) => {
    let output = "";
    editSentences.forEach((editSentence) => {
        output += `<div>`;
        output += `<div id="${editSentence.id}">`;
        output += `<p>${editSentence.content}</p>`;
        output += `</div>`;
        output += `</div>`;
    });
    document.querySelector("#output2").innerHTML = output;
});
