import { getAll } from "./api.js";

getAll("users").then((users) => {
    getAll("personalities").then((personalities) => {
        let output = ""; // output変数を外側に定義
        users.reverse().forEach((user) => {
            let userOutput = ""; // ユーザーごとの出力を保持する変数

            personalities.forEach((item) => {
                if (user.personality_id == item.id) {
                    let bgColor = ""; // 背景色を保持する変数

                    // idに基づいて背景色を設定
                    if (item.id >= 1 && item.id <= 4) {
                        bgColor = "bg-primary";
                    } else if (item.id >= 5 && item.id <= 8) {
                        bgColor = "bg-accent";
                    } else if (item.id >= 9 && item.id <= 12) {
                        bgColor = "bg-info";
                    } else if (item.id >= 13 && item.id <= 16) {
                        bgColor = "bg-default";
                    }

                    userOutput += `<div id=${item.id} class="card w-96 ${bgColor} text-primary-content mb-1">`;
                    userOutput += `<div class="card-body">`;
                    userOutput += `<h2>${user.name}</h2>`;
                    userOutput += `<p>${item.name}</p>`;
                    userOutput += `<div class="card-actions justify-end">`;
                    userOutput += `<button onclick="location.href='detail?id=${user.id}'" class="btn">詳細を見る</button>`;
                    userOutput += `</div>`;
                    userOutput += `</div>`;
                    userOutput += `</div>`;
                }
            });

            output += userOutput; // ユーザーごとの出力をoutputに追加
        });

        document.querySelector("#output").innerHTML = output; // outputをHTMLに挿入

        //1色で対応したバージョン
        // users.reverse().forEach((user) => {
        //     let userOutput = ""; // ユーザーごとの出力を保持する変数

        //     personalities.forEach((item) => {
        //         if (user.personality_id == item.id) {
        //             userOutput += `<div id=${item.id} class="card w-96 bg-primary text-primary-content mb-1">`;
        //             userOutput += `<div class="card-body">`;
        //             userOutput += `<h2>${user.name}</h2>`;
        //             userOutput += `<p>${item.name}</p>`;
        //             userOutput += `<div class="card-actions justify-end">`;
        //             userOutput += `<button onclick="location.href='detail?id=${user.id}'" class="btn">詳細を見る</button>`;
        //             userOutput += `</div>`;
        //             userOutput += `</div>`;
        //             userOutput += `</div>`;
        //         }
        //     });

        //     output += userOutput; // ユーザーごとの出力をoutputに追加
        // });

        // document.querySelector("#output").innerHTML = output; // outputをHTMLに挿入
    });
});
