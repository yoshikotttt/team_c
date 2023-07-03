import { getAll } from "./api.js";

getAll("users").then((users) => {
    getAll("personalities").then((personalities) => {
        let output = ""; // output変数を外側に定義

        users.reverse().forEach((user) => {
            let userOutput = ""; // ユーザーごとの出力を保持する変数

            personalities.forEach((item) => {
                if (user.personality_id == item.id) {
                    userOutput += `<div>`;
                    userOutput += `<h2>${user.name}</h2>`;
                    userOutput += `<p>${item.name}</p>`;
                    userOutput += `<button onclick="location.href='detail?id=${user.id}'" type="button" class="btn btn-primary">詳細を見る</button>`;
                    userOutput += `</div>`;
                }
            });

            output += userOutput; // ユーザーごとの出力をoutputに追加
        });

        document.querySelector("#output").innerHTML = output; // outputをHTMLに挿入
    });
});

// getAll("users").then((users) => {
//     let output = "";
//     users.forEach((user) => {
//         output += `<div>`;
//         output += `<h2>${user.name}</h2>`;
//         output += `<p>${user.personality_id}</p>`;
//         output += `<button onclick="location.href='detail?id=${user.id}'" type="button" class="btn btn-primary">詳細を見る</button>`;
//         output += `</div>`;
//     });
//     document.querySelector("#output").innerHTML = output;
// });

// output += `<a href="detail?id=${user.id}">`;

// しーちゃん
// 16:26
// <div>{{ Auth::user()->name }}</div>
// authユーザーの情報をuserテーブルから探し、user.idをゲットしたい。
// これをconst定義してjsで使う
