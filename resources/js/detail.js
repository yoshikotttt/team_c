import { getAll, getOne } from "./api.js";

const params = new URLSearchParams(window.location.search);
const id = params.get("id");

// getOne('users', id).then(user => {
//     return user;
// });

getOne("users", id).then((user) => {
    console.log(user);
    let output = "";
    output += `${user.name}さん`;
    document.querySelector("#name").innerHTML = output;

    let output1 = "";
    output1 += `<h2>${user.name}さんはこんな人</h2>`;
    document.querySelector("#name1").innerHTML = output1;

    let output2 = "";
    output2 += `<h2>つまり、${user.name}さんはこんな人</h2>`;
    document.querySelector("#name2").innerHTML = output2;

    let output3 = "";
    output3 += `<button onclick="location.href='detail_edit?id=${user.id}'" type="button" class="btn btn-primary">Edit</button>`;
    document.querySelector("#editbtn").innerHTML = output3;

    let output4 = "";
    output4 += `<button onclick="location.href='secret?id=${user.id}'" type="button" class="btn btn-primary">Edit</button>`;
    document.querySelector("#secretbtn").innerHTML = output4;

    const personality_id = user.personality_id;

    getAll("personalities").then((personalities) => {
        console.log(personality_id);
        // console.log(personalities);
        let output = ""; // output変数を外側に定義

        personalities.forEach((item) => {
            console.log(item.id);
            if (user.personality_id == item.id) {
                // 比較演算子を修正
                // 条件に一致した場合の処理を追加
                output += `${item.name}`;
            }

            // output変数の内容をHTMLに挿入
            document.querySelector("#type").innerHTML = output;
        });
    });
});

// personality
// getAll("personality_user").then((personality_user) => {
//     let output = "";
// output += `<div>`;
// output += `<h2>${personality_user.personality}</h2>`;
// output += `</div >`;
// document.querySelector("#type").innerHTML = output;
// });

getAll("sentences").then((sentences) => {
    getOne("users", id).then((user) => {
        console.log(user.personality_id);

        let output = ""; // output変数を外側に定義

        sentences.forEach((item) => {
            console.log(item.personalities_id);

            if (user.personality_id == item.personalities_id) {
                // 比較演算子を修正

                // 条件に一致した場合の処理を追加
                output += `<div>`;
                output += `<div id="${item.id}">`;
                output += `<p>${item.content}</p>`;
                output += `</div >`;
                output += `</div>`;
            }
        });
        // output変数の内容をHTMLに挿入
        document.querySelector("#output").innerHTML = output;
    });
});

getAll("editSentences").then((editSentences) => {
    let output = ""; // output変数を外側に定義

    editSentences.forEach((item) => {
        console.log(item.personalities_id);

        if (id == item.user_id) {
            // 比較演算子を修正

            // 条件に一致した場合の処理を追加
            output += `<div>`;
            output += `<div id="${item.id}">`;
            output += `<p>${item.content}</p>`;
            output += `</div >`;
            output += `</div>`;
        }
    });
    // output変数の内容をHTMLに挿入
    document.querySelector("#output2").innerHTML = output;
});
